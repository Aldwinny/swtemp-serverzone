<?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpassword = "";
$db = "server_zone";

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $db);
mysqli_select_db($connection, $db) or die(mysqli_error($connection));
