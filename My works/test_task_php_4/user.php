<?php
require_once 'connection_db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
</head>
<body>
    <form name="user" method="post" action="">
        <p><b>Enter your name:</b><br>
            <input id="u" name="user" type="text" size="20">
        </p>
        <p>
            <input type="submit" value="Enter">
        </p>
    </form>
</body>
</html>

<?php
$user = $_POST ['user'];
$result = mysql_query("INSERT INTO users (user_name) VALUES ('$user')");

if (isset($user))
{
    if ($result = 'true')
    {
        mysql_query("DELETE FROM users WHERE user_name=''");
    }
    if ($result = 'true')
    {
        ?><script>document.location.href = "http://hw.local/My%20works/test_task_php_4/record.php";</script><?
       //echo "OK";
    }
    else
    {
        echo "Information was not entered in the database";
    }
}
?>
