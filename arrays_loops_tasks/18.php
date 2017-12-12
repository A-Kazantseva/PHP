<?php

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

unset($arr[5], $arr[6]);

foreach ($arr as $key => $value) {
        echo $value.'<br>';
}
echo '<b>';
echo  'Суббота <br> Воскресенье';
echo '</b>';

?>