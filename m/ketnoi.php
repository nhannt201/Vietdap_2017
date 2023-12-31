<?php
     $db_con = mysql_connect("mysql.hostinger.vn","u849094575_hoi","Nhan123456");
mysql_set_charset('utf8');


     if (!$db_con){
          die('Không thể kết nối database: ' . mysql_error());
     }
     mysql_select_db("u849094575_hoi", $db_con);
	 	$servername = "mysql.hostinger.vn";
$username = "u849094575_hoi";
$password = "Nhan123456";
$dbname = "u849094575_hoi";
$dbhost = 'mysql.hostinger.vn';
            $dbuser = 'u849094575_hoi';
            $dbpass = 'Nhan123456';
?>
