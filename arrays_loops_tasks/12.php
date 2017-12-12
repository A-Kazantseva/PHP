<?php
$n = 1000;

for ($i = 1; true; $i++) {
    $n/=2;
    if($n < 50) {
       echo "$n and $i iteratins";
       break;
    }
}
