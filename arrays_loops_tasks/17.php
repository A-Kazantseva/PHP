<?php

$arr = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
$month = $arr[11];
unset($arr[11]);


foreach ($arr as $key => $value) {
        echo $value;
}
echo '<b>';
echo $month;
echo '</b>';

?>
