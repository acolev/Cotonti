<?php
/**
 * Таблица транслитерации ГОСТ 7.79-2000 / ISO-9, система Б
 * в порядке убывания приоритета при обработке
 */
global $cot_translit,$cot_translitb;
$cot_translit = [
	'ци' => 'ci',
	'Ци' => 'Ci',
	'ЦИ' => 'CI',
	'це' => 'ce',
	'Це' => 'Ce',
	'ЦЕ' => 'CE',
	'цы' => 'cy',
	'Цы' => 'Cy',
	'ЦЫ' => 'CY',
	'ц' => 'cz',
	'Ц' => 'Cz',
	'ч' => 'ch',
	'Ч' => 'Ch',
	'щ' => 'shh',
	'Щ' => 'Shh',
	'ш' => 'sh',
	'Ш' => 'Sh',
	'ж' => 'zh',
	'Ж' => 'Zh',
	'ё' => 'yo',
	'Ё' => 'Yo',
	'ю' => 'yu',
	'Ю' => 'Yu',
	'я' => 'ya',
	'Я' => 'Ya',
	'а' => 'a',
	'А' => 'A',
	'б' => 'b',
	'Б' => 'B',
	'в' => 'v',
	'В' => 'V',
	'г' => 'g',
	'Г' => 'G',
	'д' => 'd',
	'Д' => 'D',
	'е' => 'e',
	'Е' => 'E',
	'з' => 'z',
	'З' => 'Z',
	'и' => 'i',
	'И' => 'I',
	'й' => 'j',
	'Й' => 'J',
	'к' => 'k',
	'К' => 'K',
	'л' => 'l',
	'Л' => 'L',
	'м' => 'm',
	'М' => 'M',
	'н' => 'n',
	'Н' => 'N',
	'о' => 'o',
	'О' => 'O',
	'п' => 'p',
	'П' => 'P',
	'р' => 'r',
	'Р' => 'R',
	'с' => 's',
	'С' => 'S',
	'т' => 't',
	'Т' => 'T',
	'у' => 'u',
	'У' => 'U',
	'ф' => 'f',
	'Ф' => 'F',
	'х' => 'x',
	'Х' => 'X',
	'ы' => 'y',
	'Ы' => 'Y',
	'э' => 'e`',
	'Э' => 'E`',
	'ъ' => '``',
	'Ъ' => '``',
	'ь' => '`',
	'Ь' => '`'
];

/**
 * Обратное преобразование (backwards transition)
 */

$cot_translitb = array_flip($cot_translit);
