<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table><tr>
<?php
for ($i=0;$i<=9;$i++) {
    echo "<td>";
    for ($z=0;$z<=9;$z++) {
        echo $i.'*'.$z.'='.($i*$z).'<br>'; }
echo "</td>";
}
?>
</tr></table>

</body>
</html>


