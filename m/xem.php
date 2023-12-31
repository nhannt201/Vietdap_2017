<?php
//Khai báo sử dụng session
session_start();
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="/images/ico.ico"/>
    <title>Hỏi Ngay Online</title>
    <meta name="title" content="Hỏi Ngay Online"/>
    <meta name="KEYWORDS" content="FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap, hoi dap co ngay, hỏi đáp có ngay,hoi ngay online">
    <meta name="DESCRIPTION" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">

    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="AUTHOR" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h"/>
    <meta name="COPYRIGHT" content="Copyright (c) by hoingay.online"/>
            <meta name="ROBOTS" content="INDEX, FOLLOW"/>
        <meta name="Googlebot" content="index,follow,archive">
        <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="hoingay.online"/>
    <meta name="geo.region" content="Vietnam"/>

    <meta name="og:title" content="Hỏi Ngay Online - Hỏi Đáp Có Ngay"/>
    <meta name="og:description" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h."/>
    <meta name="og:url" content="http://hoingay.online"/>
    <meta name="og:image" content="/images/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <link rel="shortcut icon" href="/images/ico.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style type='text/css'>
		body{
		padding-top: 20px;
		padding-bottom: 50px;
		margin: 0px;
		}
	</style>
	<link rel='stylesheet' type='text/css' href='css/theme.css' />
    <link rel='stylesheet' type='text/css' href='css/data.css' />


<!--
tbody tr:hover{
    background: #B8C6D7;
}
-->

    </head>
	 <body data-base="http://hoingay.online/">
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
	<center><h1>Hỏi Ngay Online</h1></center>
		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>
	      <TABLE  BORDER="1"><td>
	 <center>  <?php include("ads2.php"); ?></center></td>
	 </TABLE>
<center>
	<div id="menu">
	<ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li>
 

  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo '<li><a href="thoat">Đăng xuất</a></li>';
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li>";
       }
       ?>
</ul>
	</div>
	</center>
	
<TABLE  BORDER="1">

<?php
if(isset($_GET["chude"]))
{
$chudee =  $_GET["chude"];
if ($chudee == "sinhhoc"){
	echo "<TR><TD COLSPAN='2'>

<h2>Sinh Học</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from sinhhoc ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from sinhhoc where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD> Câu Hỏi: <a href='/view?chude=".$_GET['chude']."&id=".$data['id']."'>".$data['cauhoi']."</a></TD></TR>"; 


}
}
else{
     echo "<TR><TD COLSPAN='2'>Không tìm thấy chủ đề  này!</h2></TD></TR>";
   }
    }else{
     echo "<TR><TD COLSPAN='2'>Không tìm thấy chủ đề  này!</h2></TD></TR>";
   }



?>

<TR><TD><h2>  <a href="/add?chude=<?php echo $_GET['chude']; ?>" />Tạo Chủ đề mới</a></h2></TR></TD>

</TABLE>
<!--<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>-->


   <div class="lt36-footer-copyright">
        	<div class="body">
            	<div class="logof for-home-destop">
				<a href="/"><img src="/images/logo.png"  width="350" alt="logo"/></a>
											
				</div>
               		<div class="menuu"><center><h1>Hỏi Ngay Online</h1><br/><h3>Bản quyền thuộc về hoingay.online Copyright (C) 2015</h3><br/><table id="footer" style="text-align: right;"><TR><TD><h4>Trang này mở ra nhằm mục đích trao đổi  kiến thức cho cộng đồng và xã hội ,
				<br/>những câu hỏi và bài viết có ý thô tục sẽ bị xoá mà không báo trước.</h4></TD></TR></TABLE></center></div>
				</div>

	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->