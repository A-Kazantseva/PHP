<?php

$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $key => $value) {
    if ($value <=2 && $value <=4) {
        echo 'Есть!';
        break;
    }
}