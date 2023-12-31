<?php

	 error_reporting(0);
$connect_myconn = "localhost";
$hostname_myconn = "localhost";
$database_myconn = "nguyentr_hoingay";
$username_myconn = "nguyentr_hoingay";
$password_myconn = "Nhan123456";
$conn = mysql_connect($hostname_myconn, $username_myconn, $password_myconn) or die("<h1 style=margin:0;>A MySQL error has occurred.</h1><p><b>Your Query:</b> " . $connect_myconn . "<br /> <b>Error Number:</b> (" . mysql_errno() . ")</p>" . mysql_error());
mysql_set_charset('utf8');
mysql_select_db($database_myconn, $conn);	 

?>
