<?php
$host = 'localhost';
$database = 'test_task_php_4';
$user = 'root';
$password = '';

$link = mysql_connect($host, $user, $password, $database)
    or die("Error".mysql_error($link));
mysql_select_db("test_task_php_4",$link);