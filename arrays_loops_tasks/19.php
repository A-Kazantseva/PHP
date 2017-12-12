<?php

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

$day = $arr[6];
unset($arr[6]);

foreach ($arr as $key => $value) {
        echo $value.'<br>';
}
echo '<em>';
echo  $day;
echo '</em>';

?>
