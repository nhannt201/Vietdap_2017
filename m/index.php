<?php
//Khai báo sử dụng session
session_start();

?>
<?php
$hiden = "";
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
    <meta name="GENERATOR" content="m.hoingay.online"/>
    <meta name="geo.region" content="Vietnam"/>

    <meta name="og:title" content="Hỏi Ngay Online - Hỏi Đáp Có Ngay"/>
    <meta name="og:description" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h."/>
    <meta name="og:url" content="http://m.hoingay.online"/>
    <meta name="og:image" content="/images/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <link rel="shortcut icon" href="/images/ico.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<style type='text/css'>
		body{
		
		

background: url(images/a.jpg);
}
.gs{ 
background: url(images/bgg.jpg) repeat-x;
        
		}
	</style>
<style>
repeat-x
padding-top: 20px;
		padding-bottom: 50px;
background: #ECE9E6; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #ECE9E6 , #FFFFFF); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #ECE9E6 , #FFFFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
</style>-->
	<link rel='stylesheet' type='text/css' href='css/theme.css' />
    <link rel='stylesheet' type='text/css' href='css/data.css' />


<!--
tbody tr:hover{
    background: #B8C6D7;
}
-->
<style>
.searchform {
float: left;
border:#00afdd 2px solid;
height:31px;
width:690px;
}
.searchform input[type=text] 







{
width:625px;
height:31px;
border:0px;
background:#ffffff;
float:left;
margin:0px;padding:3px;
}
.searchform input[type=submit] 






{
border:#00afdd 2px solid;
float:right;
margin:2px 2px 2px 2px;
height:27px;
padding-top:2px;
background:#4fbfdc;
}
.slide_likebox {
    -moz-transition: all 1s ease 0s;
  -webkit-transition: all 1s ease 0s;
  -o-transition: all 1s ease 0s;
    right:-205px; !important;
}
.slide_likebox:hover {
    -moz-transition: all 1s ease 0s;
  -webkit-transition: all 1s ease 0s;
  -o-transition: all 1s ease 0s;
    right: 0 !important;
}
.slide_likebox {
float:right;
width:247px;
height:385px;
background: url(http://unicity.edu.vn/styles/images/fb.png) no-repeat !important;
display:block;
color:#FFFFFF ;
right:-205px;
padding:0;
position:fixed;
top: 170px;
z-index:1002;
}
.slide_text {
font-family: Geneva, Verdana, sans-serif;
font-size: 8px;
padding-left: 10px;
text-decoration: none;
color: #FFFFFF;
} 
</style>




<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>


    </head>

	 <body data-base="http://hoingay.online">
<div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
	<div id="gs" class="gs"><div style="visibility : hidden;"><center><h1>Hỏi Ngay Online</h1></center></div>
		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>
<center>


<div id="menu">
   <ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li>
 

  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<li><a href='thoat'>Đăng xuất</a></li>
";
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li>
";
       }
       ?>
  </ul>
</div>
<center>
	   <TABLE  BORDER="1"><td>
	 <center>  <?php include("ads2.php"); ?> 
</center></td>
	 </TABLE>
  
	
	
	<TABLE  BORDER="1">



<td>
<div id="search">
<form class="searchform" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
<input class="searchsubmit" type="submit" value="Tìm kiếm" />
</form>
</div></td>


</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>10 câu hỏi mới nhất</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/view?id=".$data['id']."'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 


}


?>
 <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
echo "<TR><TD><h2>  <a href='/add' />Tạo Chủ đề mới</a></h2></TR></TD>";
       }
       else{

       }
       ?>

</TABLE>
</div>
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>10 Thành viên mới</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from member ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from member where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><h4><a href='/user?id=".$data['id']."&u=".$data['username']."'>".$data['fullname']."</h4></th><th><center><a href='/user?id=".$data['id']."&u=".$data['username']."'>".$data['username']."</h4></th></center></a></TD></TR>"; 


}


?>

</TABLE>


  <TABLE  BORDER="1"><td>
	 <center>  <h2>Đừng để những con số bằng nhau nếu không sẽ chỉ hiện 1 tên tài khoản ưu tú nhất nên hãy thi đấu nhau đừng để cùng con số!</h2></a></center></td>
	 </TABLE>
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bài viết</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from vieww ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from vieww where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='red'><h4>".$data['idd']."</h4></font></th><th><h3>Số bài viết: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bình luận</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from topcmm ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from topcmm where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='00CC66'><h4>".$data['user']."</font></h4></th><th><h3>Số bình luận: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều chủ đề</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from chudee ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from chudee where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='999900'><h4>".$data['user']."</h4></font></th><th><h3>Số chủ đề: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có điểm nhiều nhất</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT diem from diemso ORDER BY diem DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['diem']);

 $sql = "select * from diemso where diem = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='003366'><h4>".$data['user']."</font></h4></th><th><h3>Điểm số: ".$data['diem']."</h3></th</TD></TR>"; 


}


?>

</TABLE>
<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script></center>-->

<!--<div class="slide_likebox"> <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;"><div class="FB_Loader"></div><span><iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/H%E1%BB%8Fi-%C4%90%C3%A1p-C%C3%B3-Ngay-L%C6%B0u-Tr%E1%BB%AF-360-1632667910317096/?ref=bookmarks&amp;width=198&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=368" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:198px; height:368px;" allowTransparency="true"></iframe></span></div></div>-->

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


<TABLE BORDER="1"><td>
<center> <?php include("ads1.php"); ?> </center></td>
</TABLE>

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

