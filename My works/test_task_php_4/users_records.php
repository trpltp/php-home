<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users_Records</title>
</head>
<body>
    <?php
    require_once "connection_db.php";

    $result_s = mysql_query("SELECT users.user_name,records.record
                              FROM users INNER JOIN records
                              ON users.id_user=records.id_user
                              ORDER BY users.user_name");
    while ($result = mysql_fetch_array($result_s, MYSQL_NUM))
    {
        echo "User:".$result ['0'];
        echo "<br>";
        echo "Record:".$result ['1'];
        echo "<br>";
        echo "<hr>";
        echo "<br>";
    }

    ?>
</body>
</html>

