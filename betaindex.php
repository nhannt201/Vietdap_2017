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
<html lang="vi">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="/images/ico.ico"/>
    <link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />	﻿		
﻿       <title>Hỏi Ngay Online</title>
    <meta name="title" content="Hỏi Ngay Online"/>
    <meta itemprop="name" content="Hỏi Ngay Online">
	<meta property="og:title" content="Hỏi Ngay Online" />
	<meta name="DC.Title" content="Hỏi Ngay Online" /><meta name="revisit-after" content="1 days" />
    <meta name="robots" content="noodp,noydir"/>
    <meta name='keywords' content='Hỏi Ngay Online, hoi ngay, hoingay, hoi ngay online, hoi dap co ngay,hoi,dap,co,ngay'>﻿
 <meta name='description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
	<meta name='DC.Description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
		<link rel="author" href="https://plus.google.com/+TrungNh%E1%BA%ABnNguy%E1%BB%85n2001"/>
    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name='AUTHOR' content='Hỏi Ngay Online'/>
    <meta name="COPYRIGHT" content="Copyright (c) by http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="generator" content="HoingayOnline v2.0" />
    <meta name="geo.placename" content="Việt Nam" />
    <meta name="geo.region" content="vn" />
	<meta property="og:site_name" content="Hỏi Ngay Online />
    <meta property="og:type" content="article" />
    <meta property="fb:admins" content="100006476596425" />

﻿<meta name='og:title' content='Hỏi ngay Online'/>﻿<meta itemprop='description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>     <meta name="og:url" content="https://hoingay.online/"/>
	 <link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
     <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
     <meta property="og:image:type" content="image/png" />
     <meta property="article:section" content="PHP tutorials" />
	 <meta property="article:author" content="Nguyễn Trung Nhẫn" />
	 <meta property="article:publisher" content="https://www.facebook.com/hoingay.online" />
     <meta name="copyright" content="Copyright © 2015 - 2016 by Hoingay.online" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
		<script>
			var _b = document.getElementsByTagName('base')[0], _bH = "http://<?php echo $_SERVER['HTTP_HOST']; ?>";
			if (_b && _b.href != _bH) _b.href = _bH;
		</script>
	<noscript><style>.JsOnly, .jsOnly { display: none !important; }</style></noscript>
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

	 <body data-base="<?php echo $_SERVER['HTTP_HOST']; ?>">
<div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
	<div id="gs" class="gs"><div style="visibility : hidden;"><center><h1>Hỏi Ngay Online</h1></center></div>
		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành! <br/>';
		 //  echo 'Th, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
		   #xem thong bao
		   $noft= '<div class="container">
	<div class="rectangle">
		<div class="notification-text">
			<i class="material-icons">News: </i>
			<span>&nbsp;&nbsp;Bạn không có thông báo mới!.</span>
		</div>
	</div>
</div>
';
 $yesnoft= '<div class="container">
	<div class="rectangle">
		<div class="notification-text">
			<i class="material-icons">News: </i>
			<span>&nbsp;&nbsp;Bạn có thông báo mới!</span>
		</div>
	</div>
</div>
';
		   if(isset($_SESSION['username'])){
			 
$data = mysql_real_escape_string($_SESSION['username']);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM thongbao WHERE (user LIKE '%$data%') order by rand() LIMIT 5");
			   //   $capnhatrs="update member set birthday='".$u."' where username='".$data."'";
		
				  $layra2 =mysql_query("select * from member where username='".$data."'");
				  if(mysql_num_rows($layra2)!=0){
					 
					  while($get = mysql_fetch_assoc($layra2)){
				//nay danh cho check ngay sinh
				if ($get['birthday'] == "") {
						   echo '
	  <TABLE  BORDER="1"><td>


';
					 echo '<font color="red">Cập nhật ngày sinh (Dùng phòng khi quên pass và hãy nhớ nó thật kĩ nhá)</font>';
					echo '<form action="/" method="post">
   
        <label>Ngày sinh của bạn:</label> <input type="text" name="sinhnhatcuaban" value="'.$get['birthday'].'" size="25" /><br />
       <input type="submit" name="updatedate" value="Lưu ngày sinh" />
   
</form>';
		echo '</TD>
	</TABLE>';
				}
//echo "<font color='red'>".$get['birthday']."</font> ";

//echo "<font color='red'>".$get['username']."</font> ";

		 
				}
				
				///cach ra
		
				  }
				  ////phan lay tin news
		if(mysql_num_rows($query)!=0){
			 // echo 'Bạn nhận được 5 trả lời từ bài viết (Nhấn F5 xem thông báo mới):</br>';
			 echo $yesnoft;
			 echo 'Bạn có trả lời mới từ bài viết <p>';
			while($row = mysql_fetch_assoc($query)){
				//
				
echo "<a href='/view?id=".$row['date']."&messger=yes'><font color='red'>".$row['date']."</font> </a>";

		 
				}
		}
		else
		{
echo $noft;		
}
}
else
{
echo $noft;	
}
}
else
{
echo $noft;	
}
		   #het thong bao 
       }
       else{

       }
       ?></h3>
	   
	   <?php
	   if(isset($_POST["updatedate"])) {
		   $date = $_POST['sinhnhatcuaban'];
		      $capnhatrs=mysql_query("update member set birthday='".$date."' where username='".$data."'");
		
			//	echo 'Complete!';
				    echo "<meta http-equiv='refresh' content='0;/'> ";

				///xong phan kiem tra button
	   }
	   
	   ?>
<div id="menu">
	<ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li><br/>
 

  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<li><a href='thoat'>Đăng xuất</a></li><br/>
";
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li><br/>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li><br/>
";
       }
       ?>
</ul>
	</div>
  <?php include("ads2.php"); ?> 

  
	
	
	<TABLE  BORDER="1">



<td>
<div id="search">
<form class="searchform" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
<input class="searchsubmit" type="submit" value="Tìm kiếm" />
</form>
</div></td>
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".q").autocomplete({
		source: "search.php",
		minLength: 1
	});				

});
</script>


</TABLE>
	<!--   <TABLE  BORDER="1"><td>
	 <center>  
<!--<h3>1 Click nhận ngay 1$</h3>
<a href="https://www.neobux.com/?r=me09112001"><img src="https://img.neobux.com/imagens/banner9.gif" width="550" height="60"></a>
</center></td>
	 </TABLE>-->
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>10 chủ đề mới nhất</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  //
$cauhoi = convert_vi_to_en($data['cauhoi']);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	//$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$data['id'].'.html</loc>'."$n";
//
  echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 


}


?>
 
	 



</div>
<?php 

 if (isset($_SESSION['username']) && $_SESSION['username']){
	 
?>
 <TABLE  BORDER="1"><td>
  	  <?php

     //  if (isset($_SESSION['username']) && $_SESSION['username']){
		   echo "<TR><TD><h2>  <center> <h3>Bài viết mới</h3></td></h2></TR></TD>";

echo "<TR><TD><h2> <a href='/add'>Tạo Chủ đề mới</a></h2></TR></TD>";
    //   }
      // else{

    //  }
       ?>
	

	 </TABLE>
<div class="wrapper">
    <ul id="results"><!-- results appear here --></ul>
    <div class="loading-info"><center><img src="ajax-loader.gif" /></center></div>
</div>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
var track_page = 1; //track user scroll as page number, right now page number is 1
var loading  = false; //prevents multiple loads

load_contents(track_page); //initial content load

$(window).scroll(function() { //detect page scroll
	if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled to bottom of the page
		track_page++; //page number increment
		load_contents(track_page); //load content	
	}
});		
//Ajax load function
function load_contents(track_page){
    if(loading == false){
		loading = true;  //set loading flag on
		$('.loading-info').show(); //show loading animation 
		$.post( 'pageld.php', {'page': track_page}, function(data){
			loading = false; //set loading flag off once the content is loaded
			if(data.trim().length == 0){
				//notify user if nothing to load
				$('.loading-info').html("<center><h3>Bạn đã xem hết bài viết!</h3></center>");
				return;
			}
			$('.loading-info').hide(); //hide loading animation once data is received
			$("#results").append(data); //append data into #results element
		
		}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
			alert(thrownError); //alert with HTTP error
		})
	}
}
</script>
 <TABLE  BORDER="1"><td>
<?php 
 } else {
	 
	 echo "<TR><TD><center> <font color='red'><h4>Đăng nhập để nhìn thấy tính năng mới!</h4></font></center></td></TR></TD>";

	include("thongke.php"); 
 }

?>
</TABLE>
<!--
<TABLE  BORDER="1">

	<TR><TD COLSPAN='2'>

<h2>Thống kê</h2></TD></TR>";

  <TR><TD><font color='003366'><h3>Đang online trang chủ:</font></h3></th><th><h3><?php #echo online(); ?> </h3></th></TD></TR>
<TR><TD><font color='003366'><h3>Truy cập hôm nay:</font></h3></th><th><h3><?php #echo today(); ?> </h3></th></TD></TR>
<TR><TD><font color='003366'><h3>Truy cập trung bình:</font></h3></th><th><h3><?php #avg(); ?> </h3></th></TD></TR>




</TABLE>-->
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


 <?php include("ads1.php"); ?>

<TABLE BORDER="1"><td>
<center> <h3>Sau 7 ngày, những thông báo trả lời sẽ tự xoá đi để dọn máy chủ. </h3></center></td>
</TABLE>

<?php include 'footer.php'; ?>

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