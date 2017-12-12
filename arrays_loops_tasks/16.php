<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $key => $value) {
    if ($value >= 3) {
        echo '1, 2, 3,' . '<br>';
        break;
    }
}
foreach ($arr as $key => $value) {
    if ($value >= 4 && $value <= 6) {
        echo '4, 5, 6,' . '<br>';
        break;
    }
}
foreach ($arr as $key => $value) {
    if ($value >=7 && $value <=9) {
        echo '7, 8, 9'.'<br>';
        break;
    }
}
