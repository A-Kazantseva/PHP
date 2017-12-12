<?php


$number = 8644361234745;
$search = 4;

$count = substr_count($number, $search);


echo 'Цифра ' . $search . ' встречается в числе ' . $number . ' <b>' . $count . '</b> раз(а)';