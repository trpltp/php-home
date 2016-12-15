<?php

$cols = 9;
$rows = 9;

?>
<style>

    td {
        text-align: center;
        width: 25px;
            }

</style>
<table>
    <tr>
        <?php
        for ($i = 1; $i <= $cols; $i++) {
            echo "<td>";
            for ($z = 1; $z <= $rows; $z++) {
                echo ($i * $z) . "<br>";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>

<br>
<hr>
<br>

<?php
$cols = 9;
$rows = 9;
echo '<table border = "1">';
for($tr = 1; $tr <= $rows; $tr++){
    echo "<tr>";
    for($td = 1; $td <= $cols; $td++){
        if ($tr == 1 || $td == 1){
            echo '<th style="background-color:gray;">'. $tr * $td .'</th>';
        } else {
            echo '<td>' . $tr * $td . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

?>

<br>
<hr>
<br>

<?

$i = 1;
$z = 50;

for ($i=1; $i <= $z; $i++){
    if($i%2 == 1){
        echo "$i <br>";
    }
}

?>