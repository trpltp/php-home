<?php

$matrix = [
    [1,3,3,3,3,3,3,3,3,2],
    [6,1,3,3,3,3,3,3,2,4],
    [6,6,1,3,3,3,3,2,4,4],
    [6,6,6,1,3,3,2,4,4,4],
    [6,6,6,6,1,2,4,4,4,4],
    [6,6,6,6,2,1,4,4,4,4],
    [6,6,6,2,5,5,1,4,4,4],
    [6,6,2,5,5,5,5,1,4,4],
    [6,2,5,5,5,5,5,5,1,4],
    [2,5,5,5,5,5,5,5,5,1]
];
var_dump($matrix);

?>

<?php
echo "<hr>";
echo 'Третее задание';
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 06 - form</title>
</head>
<body>
<style>
    textarea {
        resize: none;
    }
</style>
<form action="" method="post">
    Имя <br><input type="text" name="name" value="<?=$_REQUEST['name']?>"><br>
    Возраст <br><input type="text" name="age" value="<?=$_REQUEST['age']?>"><br>
    <br>
    <textarea name="description" rows="5" cols="22"><?=$_REQUEST["description"]?></textarea>
    <br>
    <input id="remember" type="checkbox" name="remember">
    <lable for="remember">Remember me</lable>
    <input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php

if($_REQUEST['submit']):?>
    <p>Привет, <?=$_REQUEST['name']?>, <?=$_REQUEST['age']?> лет.</p>
    <p>Твое сообщение: <?=$_REQUEST["description"]?></p>
<?php endif?>
</body>
</html>