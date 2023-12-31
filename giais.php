<?php
if (file_exists("laivt_firewall.php"))
    include_once "laivt_firewall.php";  
//Khai báo sử dụng session
session_start();
include 'ketnoi.php';

?>
<?php
$hiden = "";
?>
<!DOCTYPE html>
<html lang='vi'>
<head>  
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Hỏi Ngay Online - Chuyên gia giải đáp</title>
<link rel="icon" type="image/png" href="/images/ico.ico"/>
<link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />
<link rel='stylesheet' type='text/css' href='css/ver2.css' />
 <meta name='description' content='Hỏi Ngay Online - Chuyên gia giải đáp - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
<meta property="og:title" content="Hỏi Ngay Online - Chuyên gia giải đáp">
<meta property="og:description" content="Hỏi Ngay Online - Chuyên gia giải đáp - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">
<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
<meta name="twitter:card" content="summary">

<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>
<style>
.button {
	background-color: #054a65;
	padding: 20px;
	color: white;
	font-size: 20px;
	text-align: center;
}
.going {
	background-color: #15cde0;
}
.going:hover {
	background-color:#07e6fd;
}

</style>

    </head>
	 <body>
	


<div class="content">


  <div class="menu group">
  <ul>
 <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo " <li><a href='/'>Trang chủ</a></li>
    <li><a href='/add'>Đăng bài</a></li>
	    <li><a href='/member.php'>Thống kê</a></li>
	<li><a href='/thoat'>Đăng xuất</a></li>
";
       }
       else{
echo " <li><a href='/'>Trang chủ</a></li>
	<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập' class='going'>Đăng Nhập</a></li>
	    <li><a href='/member.php'>Thống kê</a></li>

";
       }
       ?>
  </ul>
</div>

 <div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>

<!--	<form class="form-wrapper cf" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
	  <button type="submit">Tìm kiếm</button>
</form>-->

	

<?php


	echo "<table class='table'>
  <tr>

<th class='table__heading'>Chủ đề mới. Đang cần sự giải đáp của các chuyên gia!</th> </tr>
 ";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  //
$cauhoi = convert_vi_to_en(stripslashes($data['cauhoi']));
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	//$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$data['id'].'.html</loc>'."$n";
//

  echo " <tr class='table__row'> <td class='table__content' data-heading='Bài viết mới'><b><a href='/".$gcauhoi."/".$data['id'].".html'>".stripslashes($data['cauhoi'])."</a></n></b></td> </tr>"; 


}


?>
 <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo '   <div class="button">Chào mừng chuyên gia. Cám ơn bạn đã tham gia cùng cộng đồng!</div>

';
       }
       else{
echo '  <div class="button">Chuyên gia! . Vui lòng đăng nhập để bắt đầu giải đáp!</div>


';
       }
       ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
var offset = 220;
var duration = 500;
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > offset) {
jQuery('.back-to-top').fadeIn(duration);
} else {
jQuery('.back-to-top').fadeOut(duration);
}
});

jQuery('.back-to-top').click(function(event) {
event.preventDefault();
jQuery('html, body').animate({scrollTop: 0}, duration);
return false;
})
});
</script>

<style>
div#page {
max-width: 900px;
margin-left: auto;
margin-right: auto;
padding: 20px;
}

.back-to-top {
position: fixed;
bottom: 2em;
right: 0px;
text-decoration: none;
color: #000000;
background-color: rgba(235, 235, 235, 0.80);
font-size: 12px;
padding: 1em;
display: none;
font-weight: bold;
}

.back-to-top:hover {
background-color: rgba(135, 135, 135, 0.50);
text-decoration: none;
}
</style>

<a class="back-to-top" href="#">Lên đầu trang</a>


 <?php include("ads1.php"); ?>

<TABLE BORDER="1"><td>
<center> <h3>Sau 7 ngày, những thông báo trả lời sẽ tự xoá đi để dọn máy chủ. </h3></center></td>
</TABLE>

<?php include 'footer2.php'; ?>
</div>
	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->

<?php
function convert_vi_to_en($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        return $str;
    }
?>
<?php
#phan nay se khoi phuc thong bao ve id 1 sau do dem ngay de xoa databse
//ALTER TABLE tablename AUTO_INCREMENT = 1

?>
<?php
function _make_url_clickable_cb($matches) {
    $ret = '';
    $url = $matches[2];
    if ( empty($url) )
        return $matches[0];
    // removed trailing [.,;:] from URL
    if ( in_array(substr($url, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($url, -1);
        $url = substr($url, 0, strlen($url)-1);
    }
    return $matches[1] . "<a href=\"$url\" rel=\"nofollow\">$url</a>" . $ret;
}
function _make_web_ftp_clickable_cb($matches) {
    $ret = '';
    $dest = $matches[2];
    $dest = 'http://' . $dest;
    if ( empty($dest) )
        return $matches[0];
    // removed trailing [,;:] from URL
    if ( in_array(substr($dest, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($dest, -1);
        $dest = substr($dest, 0, strlen($dest)-1);
    }
    return $matches[1] . "<a href=\"$dest\" rel=\"nofollow\">$dest</a>" . $ret;
}
function _make_email_clickable_cb($matches) {
    $email = $matches[2] . '@' . $matches[3];
    return $matches[1] . "<a href=\"mailto:$email\">$email</a>";
}
function make_clickable($ret) {
    $ret = ' ' . $ret;
    // in testing, using arrays here was found to be faster
    $ret = preg_replace_callback('#([\s>])([\w]+?://[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_url_clickable_cb', $ret);
    $ret = preg_replace_callback('#([\s>])((www|ftp)\.[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_web_ftp_clickable_cb', $ret);
    $ret = preg_replace_callback('#([\s>])([.0-9a-z_+-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,})#i', '_make_email_clickable_cb', $ret);
    // this one is not in an array because we need it to run last, for cleanup of accidental links within links
    $ret = preg_replace("#(<a( [^>]+?>|>))<a [^>]+?>([^>]+?)</a></a>#i", "$1$3</a>", $ret);
    $ret = trim($ret);
    return $ret;
}
?>