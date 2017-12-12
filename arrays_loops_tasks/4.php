<?php
$arr = [1 => 'html', 2 => 'css', 3 => 'php', 4 => 'js', 5 => 'jq'];

foreach ($arr as $key => $value) {
    echo '<pre>';
    echo $key.PHP_EOL;
    echo '</pre>';
}

foreach ($arr as $key => $value) {
    echo '<pre>';
    echo $value.PHP_EOL;
    echo "</pre>";
}