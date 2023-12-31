<?
$time=time()+100;
require_once("index.php");
$sql2="DELETE FROM `". TABLE_PREFIX ."cron` WHERE `filename`='./laivt_firewall_unlock.php';";
$sql3="INSERT INTO `". TABLE_PREFIX ."cron` (`nextrun`, `weekday`, `day`, `hour`, `minute`, `filename`, `loglevel`, `active`, `varname`, `volatile`, `product`) VALUES
('$time', '-1', '-1', '0', 'a:1:{i:0;i:1;}', './laivt_firewall_unlock.php', '1', '1', 'laivt_firewall', '1', 'vbulletin');";
$r2 = $db->query_write($sql2);
$r3 = $db->query_write($sql3);
if ($r3)
	echo "OK";
else
	echo "That bai";
?>
<hr>
<center>&copy; Luutru360.COM 2015</center>