<h1>Первое задание</h1>
<hr>

<?php

$n = 10;
$sum = 0;

for ($i = 1; $i <= $n; $i = $i+3){
    $sum += $i;
}
echo "$sum";
?>

<hr>
<h1>Второе задание</h1>
<hr>

<?php

$arr;
for ($i=0;$i<$n;$i++){
    $arr[$i]=$i*$i;
}
echo "<pre>";
print_r($arr);
echo "</pre>";

?>

<hr>
<h1>Третье задание</h1>
<hr>

<?php

