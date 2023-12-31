<?php
if (file_exists("laivt_firewall.php"))
    include_once "laivt_firewall.php";  
//Khai báo sử dụng session
session_start();
include 'ketnoi.php';
include('allinones.php');
?>
<?php
$hiden = "";
?>
<!DOCTYPE html>
<html lang='vi'>
<head>  
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Hỏi Ngay Online - Thống kê</title>
<link rel="icon" type="image/png" href="/images/ico.ico"/>
<link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />
<link rel='stylesheet' type='text/css' href='css/ver2.css' />
 <meta name='description' content='Hỏi Ngay Online - Members - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
<meta property="og:title" content="Hỏi Ngay Online - Members">
<meta property="og:description" content="Hỏi Ngay Online - Members - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">
<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
<meta name="twitter:card" content="summary">

<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>

    </head>
	 <body>
	
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
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li>
	    <li><a href='/member.php'>Thống kê</a></li>

";
       }
       ?>
  </ul>
</div>



<div class="content">
  <h1>Hỏi Ngay Online - Thống kê</h1>
 <div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>

		

<?php
include('thongke2.php');
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
