<?php
require_once 'connection_db.php';
$sql = "SELECT user_name FROM users";
$result_select = mysql_query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Record</title>
</head>
<body>
    <form name="user_record" method="post" action="">
        <p><b>Enter your record:</b><br>
            <select name="user">
                <option disabled>Chose user</option>
                <?php
                while ($object = mysql_fetch_object($result_select)):
                ?>
                <option value="<?=$object->{user_name}?>"><?=$object->{user_name}?></option>
                <?php
                endwhile;
                ?>
            </select>
            <br>
            <textarea name="record" cols="40" rows="4"></textarea>
        </p>
        <p>
            <input type="submit" value="Enter">
        </p>
    </form>
</body>
</html>

<?php
$user = $_POST ['user'];
$record = $_POST ['record'];
$user_id_s = mysql_query("SELECT id_user FROM users WHERE user_name = '$user'");
$user_id = mysql_fetch_array($user_id_s);

if (isset($record) == TRUE && isset($user_id) == TRUE)
{
    $result = mysql_query("INSERT INTO records (id_user, record)
                            VALUES ('$user_id[0]', '$record')");
    ?><meta http-equiv="refresh" content="0; url=http://hw.local/My%20works/test_task_php_4/users_records.php"><?php
}
else
{
    echo "Fill in all the fields!";
}

/*var_dump($record);
echo "<br>";
var_dump($user);
echo "<br>";
var_dump($user_id[0]);
echo "<br>";*/

?>
