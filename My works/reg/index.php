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
    <title>Вход</title>

    <link href="css/style_index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form method="post" class="login-form" name="login">

        <h1>Вход</h1>

        <div class="form-row">
            <label for="form_email">Email:</label>
            <input name="email" type="email" id="form_email" required>
        </div>

        <div class="form-row">
            <label for="form_password">Пароль:</label>
            <input name="password" type="password" id="form_password" required>
        </div>

        <div class="form-row">
            <input name="submit" type="submit" value="Войти">
            <input name="reset" type="reset" value="Очистить">
            <input name="button" type="button" value="Зарегестрироваться" onclick="location.href='http://hw.local/My%20works/reg/reg1.php'">
        </div>
    </form>
</body>
</html>

<?php
$email = $_POST['email'];
$password1 = $_POST['password'];

if (isset($email) == TRUE && isset($password) == TRUE)
{
    $result = mysql_query("SELECT email, password FROM reg WHERE email='$email' AND password='$password1'");

    $count = mysql_num_rows($result);

    if ($count==1)
    {
        ?> <meta http-equiv="refresh" content="0; url=http://hw.local/My%20works/reg/login_ok.php"> <?php
    }
    else
    {
        echo "Неверный Email или Пароль!";
    }
}


?>