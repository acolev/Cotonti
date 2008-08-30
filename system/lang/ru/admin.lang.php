<?php

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net
-----------------------
Seditio language pack
Language : Russian (code:ru)
Localization done by : Antar ( http://subs.com.ru/page.php?al=Seditio_ru_Lang_Pack )
-----------------------
[BEGIN_SED]
File=system/core/admin/lang/ru/admin.lang.php
Version=125
Updated=2007-feb-20
Type=Lang
Author=Neocrome
Description=Admin panel
[END_SED]
==================== */

/* ====== Core ====== */

$L['core_main'] = 'Основные настройки системы';
$L['core_parser'] = 'Настройки парсинга'; 			// New in v120
$L['core_time'] = 'Время и дата';
$L['core_skin'] = 'Скины';
$L['core_lang'] = 'Языки';
$L['core_menus'] = 'Слоты меню';
$L['core_comments'] = 'Комментарии';
$L['core_forums'] = 'Форум';
$L['core_page'] = 'Страницы';
$L['core_pfs'] = 'Персональные файловые архивы';
$L['core_plug'] = 'Плагины';
$L['core_pm'] = 'Личные сообщения';
$L['core_polls'] = 'Опросы';
$L['core_ratings'] = 'Рейтинги';
$L['core_trash'] = 'Корзина';
$L['core_users'] = 'Пользователи';

/* ====== General ====== */

$L['editdeleteentries'] = 'Редактировать/удалить записи';
$L['viewdeleteentries'] = 'Посмотреть/удалить записи';
$L['addnewentry'] = 'Добавить новую запись';
$L['adm_purgeall'] = 'Очистить все';
$L['adm_listisempty'] = 'Список пуст';
$L['adm_totalsize'] = 'Общий размер';
$L['adm_showall'] = 'Показать все';
$L['adm_area'] = 'Область';
$L['adm_option'] = 'Опция';
$L['adm_setby'] = 'Установлено';
$L['adm_more'] = 'Дополнительные инструменты';
$L['adm_from'] = 'Из';
$L['adm_to'] = 'В';
$L['adm_confirm'] = 'Нажмите, чтобы подтвердить:';
$L['adm_done'] = 'Готово';
$L['adm_failed'] = 'Неудачно';
$L['adm_warnings'] = 'Предупреждения';
$L['adm_valqueue'] = 'В очереди на утверждение';
$L['adm_required'] = '(Обязательное)';
$L['adm_clicktoedit'] = '(Кликните для редактирования)';

/* ====== Banlist ====== */

$L['adm_ipmask'] = 'Маска IP';
$L['adm_emailmask'] = 'Маска Email';
$L['adm_neverexpire'] = 'Навсегда';
$L['adm_help_banlist'] = 'Примеры IP-масок: 194.31.13.41 , 194.31.13.* , 194.31.*.* , 194.*.*.*<br />Примеры email-масок: @hotmail.com, @yahoo (подстановочные групповые символы (напр. *) не поддерживаются)<br />Каждая запись может содержать только одну IP-маску и/или одну Email-маску.<br />Фильтрация по IP действует для всех отображаемых страниц, маска email - только при регистрации пользователей.';

/* ====== Cache ====== */

$L['adm_internalcache'] = 'Внутренний кэш';
$L['adm_help_cache'] = 'Недоступно';

/* ====== Configuration ====== */

$L['adm_help_config']= 'Недоступно';
$L['cfg_adminemail'] = array('Администраторский email', 'Обязательно');
$L['cfg_maintitle'] = array('Название сайта', 'Основной заголовок сайта, обязательно');
$L['cfg_subtitle'] = array('Описание', 'Опционально, отображается сразу за названием сайта');
$L['cfg_mainurl'] = array('URL сайта', 'Включая http://, и без слэша в конце !');
$L['cfg_clustermode'] = array('Серверный кластер', 'Выберите Да, если используется кластерная система балансировки нагрузок.');			// New in v125
$L['cfg_hostip'] = array('IP Сервера', 'IP Сервера, опционально');
$L['cfg_gzip'] = array('Gzip', 'Gzip компрессия при выводе HTML');
$L['cfg_cache'] = array('Внутренний кэш', 'Оставьте включенным для лучшей производительности');
$L['cfg_devmode'] = array('Режим отладки', 'Не включать на действующих сайтах');
$L['cfg_doctypeid'] = array('Тип документа', '&lt;!DOCTYPE> в шапке HTML');
$L['cfg_charset'] = array('HTML кодировка', '');
$L['cfg_cookiedomain'] = array('Домен для cookies', 'По умолчанию: пусто');
$L['cfg_cookiepath'] = array('Путь для cookies', 'По умолчанию: пусто');
$L['cfg_cookielifetime'] = array('Продолжительность жизни cookie', 'В секундах');
$L['cfg_metakeywords'] = array('HTML Meta keywords - ключевые слова, разделенные запятой', 'Для поисковых машин');
$L['cfg_disablesysinfos'] = array('Отключить время создания страницы', 'В footer.tpl');
$L['cfg_keepcrbottom'] = array('Показывать копирайт в тэге {FOOTER_BOTTOMLINE}', 'В footer.tpl');
$L['cfg_showsqlstats'] = array('Показывать статистику SQL запросов', 'В footer.tpl');
$L['cfg_shieldenabled'] = array('Включить Щит', 'Анти-спамминг и анти-хаммеринг');
$L['cfg_shieldtadjust'] = array('Настроить таймеры Щита (в %)', 'Чем больше значение, тем жестче ограничение на спам');
$L['cfg_shieldzhammer'] = array('Анти-хаммеринг после * быстрых кликов', 'Чем меньше значение, тем быстрее включится 3-х минутная автоблокировка');
$L['cfg_parser_cache'] = array(\'Включить HTML-кэш\', \''); // New in N-0.0.1
$L['cfg_parser_custom'] = array(\'Включить собственный парсер\', \''); // New in N-0.0.1
$L['cfg_parser_vid'] = array('Разрешить BB-коды для видео-файлов', '');                // New in v120
$L['cfg_parser_vid_autolink'] = array('Автоматическя обработка ссылок на известные видео-сайты', '');                                                // New in v120
$L['cfg_parsebbcodecom'] = array('Парсить BB-коды в комментриях и личных сообщениях', '');
$L['cfg_parsebbcodepages'] = array('Парсить BB-коды в страницах', '');
$L['cfg_parsebbcodeusertext'] = array('Парсить BB-коды в подписях пользователей', '');
$L['cfg_parsebbcodeforums'] = array('Парсить BB-коды в форумах', '');
$L['cfg_parsesmiliescom'] = array('Парсить смайлики в комментариях и личных сообщениях', '');
$L['cfg_parsesmiliespages'] = array('Парсить смайлики в страницах', '');
$L['cfg_parsesmiliesusertext'] = array('Парсить смайлики в подписях пользователей', '');
$L['cfg_parsesmiliesforums'] = array('Парсить смайлики в форумах', '');
$L['cfg_dateformat'] = array('Основная маска даты', 'По умолчанию: Y-m-d H:i');
$L['cfg_formatmonthday'] = array('Краткая маска даты', 'По умолчанию: m-d');
$L['cfg_formatyearmonthday'] = array('Средняя маска даты', 'По умолчанию: Y-m-d');
$L['cfg_formatmonthdayhourmin'] = array('Маска даты в форуме', 'По умолчанию: m-d H:i');
$L['cfg_servertimezone'] = array('Часовой пояс сервера', 'Смещение времени на сервере от GMT+00');
$L['cfg_defaulttimezone'] = array('Часовой пояс по умолчанию', 'Для гостей и новых пользователей, от -12 до +12');
$L['cfg_timedout'] = array('Время бездействия, в секундах', 'Время бездействия, после которого пользователь считается отсутствующим');
$L['cfg_maxusersperpage'] = array('Максимальное количество строк в списке пользователей', '');
$L['cfg_regrequireadmin'] = array('Администраторы должны утверждать регистрацию новых пользовательских счетов', '');
$L['cfg_regnoactivation'] = array('Отключить проверку email для новых пользователей', 'Рекомендуется \'Нет\', в целях безопасности');
$L['cfg_useremailchange'] = array('Разрешить пользователям менять свой email адрес', 'Рекомендуется \'Нет\', в целях безопасности');
$L['cfg_usertextimg'] = array('Разрешить изображения и HTML в подписях', 'Рекомендуется \'Нет\', в целях безопасности');
$L['cfg_av_maxsize'] = array('Аватар, макс. размер файла', 'По умолчанию: 8000 байт');
$L['cfg_av_maxx'] = array('Аватар, макс. ширина', 'По умолчанию: 64 пикселя');
$L['cfg_av_maxy'] = array('Аватар, макс. высота', 'По умолчанию: 64 пикселя');
$L['cfg_usertextmax'] = array('Макс. длина подписи пользователя', 'По умолчанию: 300 знаков');
$L['cfg_sig_maxsize'] = array('Подпись, макс. размер файла', 'По умолчанию: 50000 байт');
$L['cfg_sig_maxx'] = array('Подпись, макс. ширина', 'По умолчанию: 468 пикселей');
$L['cfg_sig_maxy'] = array('Подпись, макс. высота', 'По умолчанию: 60 пикселей');
$L['cfg_ph_maxsize'] = array('Фото, макс. размер файла', 'По умолчанию: 8000 байт');
$L['cfg_ph_maxx'] = array('Фото, макс. ширина', 'По умолчанию: 96 пикселей');
$L['cfg_ph_maxy'] = array('Фото, макс. высота', 'По умолчанию: 96 пикселей');
$L['cfg_maxrowsperpage'] = array('Максимальное кол-во строк в списках', '');
$L['cfg_countcomments'] = array('Считать комментарии', 'Показывать общее число комментариев рядом с иконкой');
$L['cfg_hideprivateforums'] = array('Скрывать приватные разделы форума', '');
$L['cfg_hottopictrigger'] = array('Сообщений в теме для присвоения ей статуса \'популярная\'', '');
$L['cfg_maxtopicsperpage'] = array('Максимум тем или сообщений на страницу', '');
$L['cfg_antibumpforums'] = array('\'Анти-бамп\' защита', 'Запрет на добавление пользователями нескольких сообщений подряд в одной и той же теме форума');
$L['cfg_pfsuserfolder'] = array('Метод хранения в папках', 'Если включено, файлы пользователя будут сохраняться в подпапках /datas/users/USERID/... вместо добавления USERID к имени файла. Должна быть установлена ТОЛЬКО при ПЕРВОЙ установке сайта. Как только файл закачан в Персональный Файловый Архив, уже поздно изменять эту опцию. Не рекомендуется менять первоначально установленную опцию.');
$L['cfg_th_amode'] = array('Генератор миниатюр', '');
$L['cfg_th_x'] = array('Ширина миниатюры', 'По умолчанию: 112 пикселей');
$L['cfg_th_y'] = array('Высота миниатюры', 'По умолчанию: 84 пикселя, рекомендуется: Ширина x 0.75');
$L['cfg_th_border'] = array('Толщина рамки для миниатюр', 'По умолчанию: 4 пикселя');
$L['cfg_th_keepratio'] = array('Сохранять пропорции для миниатюр?', '');
$L['cfg_th_jpeg_quality'] = array('Качество Jpeg миниатюры', 'По умолчанию: 85');
$L['cfg_th_colorbg'] = array('Цвет рамки для миниатюр', 'По умолчанию: 000000, hex-код цвета');
$L['cfg_th_colortext'] = array('Цвет текста в миниатюрах', 'По умолчанию: FFFFFF, hex-код цвета');
$L['cfg_th_textsize'] = array('Размер шрифта для текста в миниатюрах', '');
$L['cfg_pm_maxsize'] = array('Макс. длина сообщений', 'По умолчанию: 10000 знаков');
$L['cfg_pm_allownotifications'] = array('Разрешить уведомления на email о получении личных сообщений', '');
$L['cfg_disablehitstats'] = array('Отключить статистику просмотров', 'Переходов с других сайтов и просмотров в день');
$L['cfg_disablereg'] = array('Отключить регистрацию', 'Запрещает регистрацию новых пользователей');
$L['cfg_disablewhosonline'] = array('Отключить \'кто онлайн?\'', 'Автоматически включается, если вы активизировали Щит');
$L['cfg_allowphp_pages'] = array('Разрешить PHP код в страницах', 'Выполнение PHP кода внутри страниц, используйте с осторожностью!');
$L['cfg_count_admin'] = array(\'Считать просмотры Администраторов?\', \''); // N-0.0.1



$L['cfg_forcedefaultskin'] = array('Использовать установленный по умолчанию скин для всех пользователей', '');
$L['cfg_forcedefaultlang'] = array('Использовать установленный по умолчанию язык для всех пользователей', '');
$L['cfg_separator'] = array('Разделитель', 'По умолчанию:>');
$L['cfg_menu1'] = array('Слот меню #1<br />{PHP.cfg.menu1} во всех tpl файлах', '');
$L['cfg_menu2'] = array('Слот меню #2<br />{PHP.cfg.menu2} во всех tpl файлах', '');
$L['cfg_menu3'] = array('Слот меню #3<br />{PHP.cfg.menu3} во всех tpl файлах', '');
$L['cfg_menu4'] = array('Слот меню #4<br />{PHP.cfg.menu4} во всех tpl файлах', '');
$L['cfg_menu5'] = array('Слот меню #5<br />{PHP.cfg.menu5} во всех tpl файлах', '');
$L['cfg_menu6'] = array('Слот меню #6<br />{PHP.cfg.menu6} во всех tpl файлах', '');
$L['cfg_menu7'] = array('Слот меню #7<br />{PHP.cfg.menu7} во всех tpl файлах', '');
$L['cfg_menu8'] = array('Слот меню #8<br />{PHP.cfg.menu8} во всех tpl файлах', '');
$L['cfg_menu9'] = array('Слот меню #9<br />{PHP.cfg.menu9} во всех tpl файлах', '');
$L['cfg_topline'] = array('Верхняя линия<br />{HEADER_TOPLINE} в header.tpl', '');
$L['cfg_banner'] = array('Баннер<br />{HEADER_BANNER} в header.tpl', '');
$L['cfg_motd'] = array('Фраза дня<br />{NEWS_MOTD} в index.tpl', '');
$L['cfg_bottomline'] = array('Нижняя линия<br />{FOOTER_BOTTOMLINE} в footer.tpl', '');
$L['cfg_freetext1'] = array('Свободный текст, слот #1<br />{PHP.cfg.freetext1} во всех tpl файлах', '');
$L['cfg_freetext2'] = array('Свободный текст, слот #2<br />{PHP.cfg.freetext2} во всех tpl файлах', '');
$L['cfg_freetext3'] = array('Свободный текст, слот #3<br />{PHP.cfg.freetext3} во всех tpl файлах', '');
$L['cfg_freetext4'] = array('Свободный текст, слот #4<br />{PHP.cfg.freetext4} во всех tpl файлах', '');
$L['cfg_freetext5'] = array('Свободный текст, слот #5<br />{PHP.cfg.freetext5} во всех tpl файлах', '');
$L['cfg_freetext6'] = array('Свободный текст, слот #6<br />{PHP.cfg.freetext6} во всех tpl файлах', '');
$L['cfg_freetext7'] = array('Свободный текст, слот #7<br />{PHP.cfg.freetext7} во всех tpl файлах', '');
$L['cfg_freetext8'] = array('Свободный текст, слот #8<br />{PHP.cfg.freetext8} во всех tpl файлах', '');
$L['cfg_freetext9'] = array('Свободный текст, слот #9<br />{PHP.cfg.freetext9} во всех tpl файлах', '');
$L['cfg_extra1title'] = array('Поле #1 (Строка), заголовок', '');
$L['cfg_extra2title'] = array('Поле #2 (Строка), заголовок', '');
$L['cfg_extra3title'] = array('Поле #3 (Строка), заголовок', '');
$L['cfg_extra4title'] = array('Поле #4 (Строка), заголовок', '');
$L['cfg_extra5title'] = array('Поле #5 (Строка), заголовок', '');
$L['cfg_extra6title'] = array('Поле #6 (Поле выбора), заголовок', '');
$L['cfg_extra7title'] = array('Поле #7 (Поле выбора), заголовок', '');
$L['cfg_extra8title'] = array('Поле #8 (Поле выбора), заголовок', '');
$L['cfg_extra9title'] = array('Поле #9 (Длинный текст), заголовок', '');
$L['cfg_extra1tsetting'] = array('Максимум символов в этом поле', '');
$L['cfg_extra2tsetting'] = array('Максимум символов в этом поле', '');
$L['cfg_extra3tsetting'] = array('Максимум символов в этом поле', '');
$L['cfg_extra4tsetting'] = array('Максимум символов в этом поле', '');
$L['cfg_extra5tsetting'] = array('Максимум символов в этом поле', '');
$L['cfg_extra6tsetting'] = array('Значения для поля выбора, через запятую', '');
$L['cfg_extra7tsetting'] = array('Значения для поля выбора, через запятую', '');
$L['cfg_extra8tsetting'] = array('Значения для поля выбора, через запятую', '');
$L['cfg_extra9tsetting'] = array('Максимальная длина текста', '');
$L['cfg_extra1uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra2uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra3uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra4uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra5uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra6uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra7uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra8uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_extra9uchange'] = array('Доступно для редактирования в профиле пользователя?', '');
$L['cfg_disable_comments'] = array('Отключить комментарии', '');
$L['cfg_disable_forums'] = array('Отключить форум', '');
$L['cfg_disable_pfs'] = array('Отключить Персональные Файловые Архивы', '');
$L['cfg_disable_polls'] = array('Отключить опросы', '');
$L['cfg_disable_pm'] = array('Отключить личные сообщения', '');
$L['cfg_disable_ratings'] = array('Отключить рейтинги', '');
$L['cfg_disable_page'] = array('Отключить страницы', '');
$L['cfg_disable_plug'] = array('Отключить плагины', '');
$L['cfg_trash_prunedelay'] = array('Удалить элементы из корзины через * дней (0 - не удалять никогда)', ''); 	// New in v110
$L['cfg_trash_comment'] = array('Разрешить использование корзины для комментариев', '');		// New in v110
$L['cfg_trash_forum'] = array('Разрешить использование корзины для форумов', '');		// New in v110
$L['cfg_trash_page'] = array('Разрешить использование корзины для страниц', '');		// New in v110
$L['cfg_trash_pm'] = array('Разрешить использование корзины для личных сообщений', '');		// New in v110
$L['cfg_trash_user'] = array('Разрешить использование корзины для пользователей', '');		// New in v110

/* ====== Forums ====== */

$L['adm_diplaysignatures'] = 'Показывать подписи';
$L['adm_enablebbcodes'] = 'Включить BB-коды';
$L['adm_enablesmilies'] = 'Включить смайлы';
$L['adm_enableprvtopics'] = 'Разрешить приватные темы';
$L['adm_countposts'] = 'Включить счётчик сообщений';
$L['adm_autoprune'] = 'Автоматически удалять темы после * дней';
$L['adm_postcounters'] = 'Сверить счётчики';
$L['adm_help_forums'] = 'Не доступно';
$L['adm_forum_structure'] = 'Структура категорий форума';	// New in v11
$L['adm_help_forums_structure'] = 'Недоступно';	// New in v11
$L['adm_defstate'] = 'Состояние по умолчанию';	// New in v11
$L['adm_defstate_0'] = 'Свёрнуто';	// New in v11
$L['adm_defstate_1'] = 'Развёрнуто';	// New in v11


/* ====== IP search ====== */

$L['adm_searchthisuser'] = 'Поиск этого IP в базе данных пользователей';
$L['adm_dnsrecord'] = 'Запись DNS для этого адреса';

/* ====== Smilies ====== */

$L['adm_help_smilies'] = 'Не доступно';

/* ====== PFS ====== */

$L['adm_gd'] = 'Графическая библиотека GD';
$L['adm_allpfs'] = 'Все Персональные Файловые Архивы';
$L['adm_allfiles'] = 'Все файлы';
$L['adm_thumbnails'] = 'Миниатюры';
$L['adm_orphandbentries'] = 'Потерянные записи БД';
$L['adm_orphanfiles'] = 'Потерянные файлы';
$L['adm_delallthumbs'] = 'Удалить все миниатюры';
$L['adm_rebuildallthumbs']= 'Удалить и реконструировать все миниатюры';
$L['adm_help_pfsthumbs'] = 'Не доступно';
$L['adm_help_check1'] = 'Не доступно';
$L['adm_help_check2'] = 'Не доступно';
$L['adm_help_pfsfiles'] = 'Не доступно';
$L['adm_help_allpfs'] = 'Не доступно'; // и неизвестно, когда будет..
$L['adm_nogd'] = 'Графическая библиотека GD не поддерживается на данном хостинге. Система не сможет создать миниатюры для изображений в файловом архиве. Вам необходимо из админпанели пройти по закладке \'Персональный Файловый Архив\' и отключить опцию генерации миниатюр.';

/* ====== Pages ====== */

$L['adm_structure'] = 'Структура страниц (категорий)';
$L['adm_syspages'] = 'Смотреть категорию \'системные\'';
$L['adm_help_page'] = 'Страницы, которые относятся к категории \'системные\', не показываются в публично доступных списках страниц. Это сделано для создания изолированных страниц.';
$L['adm_sortingorder'] = 'Установить для категорий порядок сортировки по умолчанию';
$L['adm_fileyesno'] = 'Файл (да/нет)';
$L['adm_fileurl'] = 'URL файла';
$L['adm_filesize'] = 'Размер файла';
$L['adm_filecount'] = 'Счётчик загрузок файла';

$L['adm_tpl_mode'] = 'Использовать TPL';	// New in v110
$L['adm_tpl_empty'] = 'По умолчанию';	// New in v110
$L['adm_tpl_forced'] = 'Такой же, как у';	// New in v110
$L['adm_tpl_parent'] = 'Такой же, как у родительского раздела';	// New in v110

/* ====== Polls ====== */

$L['adm_polls_indexpolls'] = 'Опросы на главной (последние вверху) :'; // N-0.0.1
$L['adm_polls_forumpolls'] = 'Голосования в форумах (последние вверху) :'; // N-0.0.1
$L['adm_polls_polltopic'] = 'Голосование'; // N-0.0.1
$L['adm_help_polls'] = 'Как только вы создали тему нового опроса, нажмите \'Редактировать\', чтобы добавить варианты ответа для этого опроса.<br />Кнопка \'Удалить\' удалит выбранный опрос, его опции, и все относящиеся к нему записи о голосовании.<br />Кнопка \'Сбросить\' удалит все голоса для выбранного опроса, не удаляя сам опрос и его опции.<br />Кнопка \'Переместить наверх\' изменит дату создания опроса на сегодняшнюю, и таким образом сделает опрос \'текущим\', т.е. первым в списке.';

/* ====== Statistics ====== */

$L['adm_phpver'] = 'Установленная версия PHP';
$L['adm_zendver'] = 'Установленная версия Zend';
$L['adm_interface'] = 'Интерфейс между веб-сервером и PHP';
$L['adm_os'] = 'Операционная система';
$L['adm_clocks'] = 'Часы';
$L['adm_time1'] = '#1: Время на сервере';
$L['adm_time2'] = '#2: GMT время, возвращённое сервером';
$L['adm_time3'] = '#3: GMT время + смещение времени сервера (Транслируемое Seditio)';
$L['adm_time4'] = '#4: Локальное время, установленное в вашем профиле';
$L['adm_help_versions'] = 'Установите нужный часовой пояс сервера <a href=\'admin.php?m=config&amp;n=edit&amp;o=core&amp;p=time\'>здесь</a>, чтобы время №3 отражалось правильно.<br />Время №4 зависит от установленного в вашем профиле часового пояса.<br />Значения времени #1 и #2 игнорируются Seditio.';
$L['adm_log'] = 'Системный лог';
$L['adm_infos'] = 'Информация';
$L['adm_versiondclocks'] = 'Версии и часы';
$L['adm_checkcoreskins'] = 'Проверить файлы ядра и скины';
$L['adm_checkcorenow'] = 'Проверить файлы ядра сейчас!';
$L['adm_checkingcore'] = 'Идёт проверка файлов ядра...';
$L['adm_checkskins'] = 'Проверить наличие всех файлов в скинах';
$L['adm_checkskin'] = 'Проверить наличие TPL файлов для скина';
$L['adm_checkingskin'] = 'Идёт проверка скина...';
$L['adm_hits'] = 'Просмотров';
$L['adm_check_ok'] = 'Ok';
$L['adm_check_missing'] = 'Отсутствует';
$L['adm_ref_lowhits'] = 'Удалить записи с количеством просмотров меньше 5';
$L['adm_maxhits'] = 'Максимум просмотров был зафиксирован %1$s, в этот день было показано %2$s страниц.'; // Новое в v102
$L['adm_byyear'] = 'По годам';
$L['adm_bymonth'] = 'По месяцам';
$L['adm_byweek'] = 'По неделям';

/* ====== Ratings ====== */

$L['adm_ratings_totalitems'] = 'Всего оценённых страниц';
$L['adm_ratings_totalvotes'] = 'Всего голосов';
$L['adm_help_ratings'] = 'Чтобы обнулить рейтинг, просто удалите его. Он будет воссоздан с первым новым голосом.';

/* ====== Trash can ====== */

$L['adm_help_trashcan'] = 'Здесь находится список элементов сайта, недавно удаленных модераторами и пользователями.<br />Обратите внимание, что восстановление темы форума восстанавливает также все сообщения из этой темы.<br />Также, восстановление сообщения в удаленной теме восстанавливает всю тему (если она доступна), и все сообщения в этой теме.<br />&nbsp;<br />Окончательное удаление: удаление элемента без возможности восстановления.<br />Восстановление: возвращает удалённый элемент на сайт.'; // New in v110

/* ====== Users ====== */

$L['adm_defauth_members'] = 'Права по умолчанию для пользователей';
$L['adm_deflock_members'] = 'Маска-замок для пользователей';
$L['adm_defauth_guests'] = 'Права по умолчанию для посетителей';
$L['adm_deflock_guests'] = 'Маска-замок для гостей';
$L['adm_rightspergroup'] = 'Права по группам';
$L['adm_copyrightsfrom'] = 'Установить набор прав как в группе';
$L['adm_maxsizesingle'] = 'Максимальный размер одного файла для Файлового Архива (KB)';
$L['adm_maxsizeallpfs'] = 'Суммарный размер всех файлов в Файловом Архиве (KB)';
$L['adm_rights_allow10'] = 'Разрешено';
$L['adm_rights_allow00'] = 'Запрещено';
$L['adm_rights_allow11'] = 'Разрешено и закрыто в целях безопасности';
$L['adm_rights_allow01'] = 'Запрещено и закрыто в целях безопасности';

/* ====== Plugins ====== */

$L['adm_extplugins'] = 'Расширенные плагины';
$L['adm_present'] = 'Присутствует';
$L['adm_missing'] = 'Отсутствует';
$L['adm_paused'] = 'Приостановлен';
$L['adm_running'] = 'Работает';
$L['adm_partrunning'] = 'Работает частично';
$L['adm_notinstalled'] = 'Не установлен';

$L['adm_opt_installall'] = 'Установить';
$L['adm_opt_installall_explain'] = 'Эта опция установит или перезапустит все модули плагина.';
$L['adm_opt_uninstallall'] = 'Отключить</a></td>';
$L['adm_opt_uninstallall_explain'] = 'Эта опция отключит все модули плагина (файлы плагина при этом физически не удаляются).';
$L['adm_opt_pauseall'] = 'Приостановить';
$L['adm_opt_pauseall_explain'] = 'Эта опция приостановит работу всех модулей плагина.';
$L['adm_opt_unpauseall'] = 'Возобновить';
$L['adm_opt_unpauseall_explain'] = 'Эта опция возобновит работу всех модулей плагина.';

/* ====== Private messages ====== */

$L['adm_pm_totaldb'] = 'Личных сообщений в базе данных';
$L['adm_pm_totalsent'] = 'Общее количество отправленных на этот момент личных сообщений';

/* ====== BBCode Admin ========*/
$L['adm_bbcode'] = 'ББкод';
$L['adm_bbcodes'] = 'ББкоды';
$L['adm_bbcodes_added'] = 'Новый ббкод успешно добавлен.';
$L['adm_bbcodes_clearcache'] = 'Очистить HTML-кэш';
$L['adm_bbcodes_clearcache_confirm'] = 'Это очистит кэш всех страниц и сообщений, продолжить?';
$L['adm_bbcodes_clearcache_done'] = 'HTML-кэш очищен.';
$L['adm_bbcodes_confirm'] = 'Действительно удалить этот ббкод?';
$L['adm_bbcodes_container'] = 'Контейнер';
$L['adm_bbcodes_mode'] = 'Режим';
$L['adm_bbcodes_new'] = 'Новый ббкод';
$L['adm_bbcodes_pattern'] = 'Шаблон';
$L['adm_bbcodes_postrender'] = 'Пост-рендер';
$L['adm_bbcodes_priority'] = 'Приоритет';
$L['adm_bbcodes_removed'] = 'Ббкод успешно удален.';
$L['adm_bbcodes_replacement'] = 'Замена';
$L['adm_bbcodes_updated'] = 'Ббкод успешно обновлен.';
$L['adm_help_bbcodes'] = <<<HTM
<ul>
<li><strong>Имя</strong> - Имя ббкода (только буквы латинского алфавита, цифры и подчеркивание)
<li><strong>Режим</strong> - Режим парсинга, один из: \'str\' (str_replace), \'ereg\' (eregi_replace), \'pcre\' (preg_replace) или \'callback\' (preg_replace_callback)
<li><strong>Шаблон</strong> - Строка ббкода или регулярное выражение
<li><strong>Замена</strong> - Строка замены, регулярная замена или тело функции обратного вызова
<li><strong>Контейнер</strong> - Является ли ббкод контейнером (например, [bbcode]Какой-то текст[/bbcode])
<li><strong>Приоритет</strong> - Приоритет ббкода от 0 до 255. Ббкоды с меньшим приоритетом обрабатываются в первую очередь, 128 - стандартный средний приоритет.
<li><strong>Плагин</strong> - Код плагина/части, которой принадлежит ббкод. Только для плагинов.
<li><strong>Пост-рендер</strong> - Применять ббкод к сформированному HTML-кэшу. Используйте только если ваш callback-код делает какие-то вычисления на каждом запросе.
</ul>
HTM;
?>