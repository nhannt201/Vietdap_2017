<?php
include('ketnoi.php');
$result = mysql_query("SELECT max(id) FROM data");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

//$idnew = $row[0]; // 42

//
$filename = 'checkping.txt';
//$file_id = 'checkping_id.txt';
$date = date("l");

if (file_exists($filename)){
  //  echo "co";
$myfile = fopen($filename, "r") or die("Toi khong the check!");
$ngaychu = fgets($myfile);

if ($ngaychu == $date) {

} else {
  $url = get_dataa('http://www.google.com/webmasters/sitemaps/ping?sitemap='.htmlentities("http://".$_SERVER['SERVER_NAME'].'/sitemap.php'));
  //
 // echo 'http://www.google.com/webmasters/sitemaps/ping?sitemap='.htmlentities("http://".$_SERVER['SERVER_NAME'].'/sitemap.php');
   if($url ){
 
	          echo 'Bạn đã may mắn! Chúc ngày mới tốt lành! Cám ơn đã xem nguồn trang!' ;
 
	        }else{
 
	          echo "Có lẽ bạn không may mắn! Chúc ngày mới tốt lành!";
 
	        }
	        
$myfile5 = fopen($filename, "w+") or die("Khong the cap nhat sitemap!");
$txt2 = $date ;
fwrite($myfile5, $txt2);
fclose($myfile5);
//

  //
}
fclose($myfile5);
} else {

$myfile = fopen($filename, "w+") or die("Khong the cap nhat sitemap!");
$txt = $date ;
fwrite($myfile, $txt);
fclose($myfile);

}
function get_dataa($url) {
  $ch = curl_init();
  $timeout = 10;
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
  curl_setopt($ch, CURLOPT_MAXREDIRS, 15);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
?>