<?php


$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}

echo '<pre>';
print_r($arr);
echo '</pre>';

foreach ($arr as $key => $value) {
    if ($value > 0 && $key % 2) {
        echo $value. '<br>';
    }
}

