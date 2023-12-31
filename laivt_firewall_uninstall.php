<?
require_once("index.php");
$sql2="DELETE FROM `". TABLE_PREFIX ."cron` WHERE `filename`='./laivt_firewall_unlock.php';";
$r2 = $db->query_write($sql2);
if ($r2)
	echo "Uninstall thanh cong";
else
	echo "Uninstall That bai";
?>
<hr>
<center>&copy; SinhVienIT.Net 2009</center>