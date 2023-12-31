<?php
include("ketnoi.php");
$db_username = $username_myconn;
$db_password = $password_myconn;
$db_name = $database_myconn;
$db_host = $hostname_myconn;
$item_per_page = 5;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
mysql_set_charset('utf8');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
if (!$mysqli->set_charset("utf8")) {
//    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
} else {
 //   printf("Current character set: %s\n", $mysqli->character_set_name());
}
