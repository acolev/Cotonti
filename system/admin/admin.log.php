<?php
/**
 * Administration panel - Logs manager
 *
 * @package Cotonti
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

(defined('COT_CODE') && defined('COT_ADMIN')) or die('Wrong URL.');

list(Cot::$usr['auth_read'], Cot::$usr['auth_write'], Cot::$usr['isadmin']) = cot_auth('admin', 'a');
cot_block(Cot::$usr['auth_read']);

$t = new XTemplate(cot_tplfile('admin.log', 'core'));

$adminpath[] = array(cot_url('admin', 'm=other'), Cot::$L['Other']);
$adminpath[] = array(cot_url('admin', 'm=log'), Cot::$L['Log']);
$adminhelp = Cot::$L['adm_log_desc'];
$adminTitle = Cot::$L['Log'];

$log_groups = array(
	'all' => Cot::$L['All'],
	'def' => Cot::$L['Default'],
	'adm' => Cot::$L['Administration'],
	'for' => Cot::$L['Forums'],
	'sec' => Cot::$L['Security'],
	'usr' => Cot::$L['Users'],
	'plg' => Cot::$L['Plugins']
);

$maxrowsperpage = (is_int(Cot::$cfg['maxrowsperpage']) && Cot::$cfg['maxrowsperpage'] > 0 || ctype_digit(Cot::$cfg['maxrowsperpage'])) ?
    Cot::$cfg['maxrowsperpage'] : 15;
list($pg, $d, $durl) = cot_import_pagenav('d', $maxrowsperpage);

/* === Hook === */
$event = 'admin.log.first';
foreach (cot_getextplugins($event) as $pl) {
    include $pl;
}
unset($event);
/* ============ */

if ($a == 'purge' && $usr['isadmin']) {
	cot_check_xg();
	/* === Hook === */
    $event = 'admin.log.purge';
    foreach (cot_getextplugins($event) as $pl) {
        include $pl;
    }
    unset($event);
    /* ============ */

	$db->query("TRUNCATE $db_logger") ? cot_message('adm_ref_prune') : cot_message('Error');
}

$totaldblog = $db->countRows($db_logger);

$n = (empty($n)) ? 'all' : $n;

foreach($log_groups as $grp_code => $grp_name)
{
	$selected = ($grp_code == $n) ? " selected=\"selected\"" : "";

	$t->assign(array(
		'ADMIN_LOG_OPTION_VALUE_URL' => cot_url('admin', 'm=log&n='.$grp_code),
		'ADMIN_LOG_OPTION_GRP_NAME' => $grp_name,
		'ADMIN_LOG_OPTION_SELECTED' => $selected
	));
	$t->parse('MAIN.GROUP_SELECT_OPTION');
}

$is_adminwarnings = isset($adminwarnings);

$totalitems = ($n == 'all') ? $totaldblog : $db->query("SELECT COUNT(*) FROM $db_logger WHERE log_group='$n'")->fetchColumn();
$pagenav = cot_pagenav('admin', 'm=log&n='.$n, $d, $totalitems, $maxrowsperpage, 'd', '', $cfg['jquery'] && $cfg['turnajax']);

if($n == 'all')
{
	$sql = $db->query("SELECT * FROM $db_logger WHERE 1 ORDER by log_id DESC LIMIT $d, ".$maxrowsperpage);
}
else
{
	$sql = $db->query("SELECT * FROM $db_logger WHERE log_group='$n' ORDER by log_id DESC LIMIT $d, ".$maxrowsperpage);
}

$ii = 0;
/* === Hook - Part1 : Set === */
$eventLoop = 'admin.log.loop';
$extp = cot_getextplugins($eventLoop);
/* ============ */
foreach ($sql->fetchAll() as $row) {
	$t->assign([
		'ADMIN_LOG_ROW_LOG_ID' => $row['log_id'],
		'ADMIN_LOG_ROW_DATE' => cot_date('datetime_medium', $row['log_date']),
		'ADMIN_LOG_ROW_DATE_STAMP' => $row['log_date'],
		'ADMIN_LOG_ROW_URL_IP_SEARCH' => cot_plugin_active('ipsearch') ?
			cot_url('admin', 'm=other&p=ipsearch&a=search&id=' . $row['log_ip'] . '&' . cot_xg()) : '',
		'ADMIN_LOG_ROW_LOG_IP' => $row['log_ip'],
		'ADMIN_LOG_ROW_LOG_NAME' => $row['log_name'],
		'ADMIN_LOG_ROW_URL_LOG_GROUP' => cot_url('admin', 'm=log&n=' . $row['log_group']),
		'ADMIN_LOG_ROW_LOG_GROUP' => isset($log_groups[$row['log_group']]) ?
            $log_groups[$row['log_group']] : $row['log_group'],
		'ADMIN_LOG_ROW_LOG_TEXT' => htmlspecialchars($row['log_text'])
	]);

	/* === Hook - Part2 : Include === */
    $event = $eventLoop;
	foreach ($extp as $pl) {
		include $pl;
	}
    unset($event);
    /* ============ */

	$t->parse('MAIN.LOG_ROW');
	$ii++;
}

$t->assign([
	'ADMIN_LOG_URL_PRUNE' => cot_url('admin', 'm=log&a=purge&' . cot_xg()),
	'ADMIN_LOG_TOTALDBLOG' => $totaldblog,
	'ADMIN_LOG_PAGINATION_PREV' => $pagenav['prev'],
	'ADMIN_LOG_PAGNAV' => $pagenav['main'],
	'ADMIN_LOG_PAGINATION_NEXT' => $pagenav['next'],
	'ADMIN_LOG_TOTALITEMS' => $totalitems,
	'ADMIN_LOG_ON_PAGE' => $ii
]);

cot_display_messages($t);

/* === Hook  === */
$event = 'admin.log.tags';
foreach (cot_getextplugins($event) as $pl) {
    include $pl;
}
unset($event);
/* ============ */

$t->parse('MAIN');
$adminmain = $t->text('MAIN');
