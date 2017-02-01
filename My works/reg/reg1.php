<?php
require_once 'connection.php';

$link = mysql_connect($host,$user,$password,$database)
or die("Error".mysql_error($link));

mysql_select_db($database);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Регистрация</title>

    <link href="css/style_reg1.css" rel="stylesheet" type="text/css">
</head>
<body>

<script>
    function checkPass() {
        with (document)
        getElementById('info').innerHTML = (getElementById('form_password1').value != getElementById('form_password2').value) ?
            'Пароль повторен не верно!' : 'OK';
    }
</script>

<b style="color: red" id="info"></b>

    <form method="post" class="reg-form" name="reg">

        <h1>Регистрация</h1>

        <div class="form-row">
            <label for="form_name">Имя:</label>
            <input name="name" type="text" id="form_name" required>
        </div>

        <div class="form-row">
            <label for="form_surname">Фамилия:</label>
            <input name="surname" type="text" id="form_surname">
        </div>

        <div class="form-row">
            <label for="form_age">Дата рождения:</label>
            <input name="age" type="date" min="1950.01.01" max="2016.01.01" id="form_age">
        </div>

        <div class="form-row">
            <label for="form_sex">Пол:<br></label>
            <input name="sex" type="radio" value="man" id="form_age">Мужской<br>
            <input name="sex" type="radio" value="woman" id="form_sex">Женский
        </div>

        <div class="form-row">
            <label for="form_password1">Пароль:</label>
            <input name="password1" type="password" id="form_password1" required>
        </div>

        <div class="form-row">
            <label for="form_password2">Повторите пароль:</label>
            <input name="password2" type="password" id="form_password2" required onchange="checkPass()">
        </div>

        <div class="form-row">
            <label for="form_email">Email:</label>
            <input name="email" type="email" id="form_email" multiple required>
        </div>

        <div class="form-row">
            <input name="submit" type="submit" value="Отправить">
            <input name="reset" type="reset" value="Очистить">
        </div>

    </form>
</body>
</html>

<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 == $password2)
{
    $password = $password1;
}
else
{
    echo "Пароль повторен не верно!";
}

if (isset($email) == TRUE)
{
    $email_ok = mysql_query("SELECT email FROM reg WHERE email = '$email'" );
    $count = mysql_num_rows($email_ok);

    $resut = mysql_query("INSERT INTO reg (name, surname, age, sex, email, password)
            VALUES ('$name','$surname','$age','$sex','$email','$password')");

    if ($count >= 1)
    {
        echo "Такой Email уже зарегестрирован!";
    }
    else
    {
        if ($email != NULL)
        {
            ?> <meta http-equiv="refresh" content="0; url=http://hw.local/My%20works/reg/reg_ok.php"> <?php
        }
        else
        {
            mysql_query("DELETE FROM reg WHERE email=''");
            echo "Заполните все необходимые поля!";
        }
    }
}





/*var_dump($name);
echo "<br>";
var_dump($surname);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($sex);
echo "<br>";
var_dump($email);
echo "<br>";
var_dump($password1);
echo "<br>";
var_dump($password2);
echo "<br>";*/



?>