<?php

/**
 * Answer #1 on stackoverflow
 *
 * This function will only strip backslashes from array and it will return null in case of other types if you give strict the true value
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   stackoverflow-answers
 * @author    Hamza Tamyachte
 *
 *
 */


function strip_backslashes_array($arr,  $strict = false)
{
    $isarray = is_array($arr);

    if ($strict && !$isarray) {
        return null;
    }

    return $isarray? array_map('strip_backslashes_array', $arr) :
        implode( "", explode("\\", $arr));

}


$number = 5;
$text = 'Hey th\\\ere!';
$array = array("\\1","2\\",3,4);

echo '</br>';

$value1 = strip_backslashes_array($number, true);
var_dump($value1);


echo '</br>';

$value2 = strip_backslashes_array($text, true);
var_dump($value2);


echo '</br>';

$value3 = strip_backslashes_array($array, true);
var_dump($value3);

