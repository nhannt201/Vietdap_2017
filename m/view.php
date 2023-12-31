<?php
session_start();
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="/images/ico.ico"/>

	<?php
	
	$idvg = "0";
	$idvg2 = "10";
	?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo "<title>".$row['cauhoi']." | Hỏi Ngay Online</title>"; 

}

?>
 
   
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo " <meta name='KEYWORDS' content='".$row['cauhoi'].",FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap,hoi ngay online'>"; 

}

?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo "<meta name='DESCRIPTION' content='".$row['noidung']."'>"; 

}

?>
    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
<meta name='AUTHOR' content='Hỏi Ngay Online'/>
    <meta name="COPYRIGHT" content="Copyright (c) by hoingay.online"/>
            <meta name="ROBOTS" content="INDEX, FOLLOW"/>
        <meta name="Googlebot" content="index,follow,archive">
        <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="hoingay.online"/>
    <meta name="geo.region" content="Vietnam"/>

<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo "<meta name='og:title' content='".$row['cauhoi']."'/>"; 

}

?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo "<meta name='og:description' content='".$row['noidung']."'/>"; 

}

?>
     <meta name="og:url" content="http://hoingay.online"/>
      <meta name="og:image" content="/images/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <link rel="shortcut icon" href="/images/ico.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<style type='text/css'>
		body{
		padding-top: 20px;
		padding-bottom: 50px;
		

		}
	</style>
<style>
repeat-x
background: #ECE9E6; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #ECE9E6 , #FFFFFF); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #ECE9E6 , #FFFFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
</style>-->
	<link rel='stylesheet' type='text/css' href='css/theme.css' />
    <link rel='stylesheet' type='text/css' href='css/data.css' />

<!--tbody tr:hover{
    background: #B8C6D7;
}-->

    </head>
	 <body data-base="http://hoingay.online/">
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
<br/><br/>
<div id="gs" class="gs">
<br/>
   <TABLE  BORDER="1"><td>
	 <center>  <?php include("ads2.php"); ?><hr/>
</center></td>
	 </TABLE>
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
</center>
<center>

<strong>
<a href="index.html" accesskey="1">Hỏi Ngay Online</a> <!-- BEGIN TEMPLATE: navbar_link -->

	&raquo; <font color="black"><b>Hỏi Đáp</b></font>


<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

	&raquo; 
<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
	
echo "<a href='http://hoingay.online/user?u=".$row['user']."'>".$row['user']."</a>";


}
}
?>

<!-- END TEMPLATE: navbar_link --> &raquo; <!-- BEGIN TEMPLATE: navbar_link -->


<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo $row['cauhoi']; 

}

?>


<!-- END TEMPLATE: navbar_link -->
</strong>


</center>
		<!--<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>-->
	   	

	
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
<TABLE  BORDER="1">
</div>
<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$xemcaida = $row['noidung'];
$audio = str_replace("[img]", "<img src='", $xemcaida);
$noidung2 = str_replace("[/img]", "' width='560' height='315'/>", $audio);
$audio2 = str_replace("[youtube]", "<iframe width='300'src='", $noidung2);
$noidung = str_replace("[/youtube]", "' frameborder='0' allowfullscreen></iframe>", $audio2);
	echo "<TR><TD COLSPAN='2'>

<h2>Câu hỏi bởi <b>".$row['user']."</b></h2></TD></TR>";
 echo "<TR><TD><h3 style='text-align: left;'><b>Ngày giờ gửi:</b> <font color='00999'>".$row['date']."</font></h3></TD></TR>"; 
  echo "<TR><TD><h3 style='text-align: left;'><b>Câu hỏi:</b> <font color='00999'>".$row['cauhoi']."</font></h3></TD></TR>"; 
   $string = "<TR><TD><h3 style='text-align: left;'><b>Nội dung:</b> <br/><br/><font color='00999'>".$noidung2."</font></h3></TD></TR>"; 
echo make_clickable($string);

}
}
?>

	
<TR><TD><h2 style='text-align: center;'>Trả lời</h2></TD></TR>
<?php
  if(isset($_GET['lm'])){

       if (isset($_SESSION['username']) && $_SESSION['username']){
        
		  $idvg2 = $_GET['lm'] + 10;
		  $idvg = $idvg2 - 10;
		   echo "<TR><TD><h2>  <a href ='/view?id=".$_GET['id']."&lm=".$idvg2."' />Xem thêm bình luận</a></h2></TR></TD>";
       }
       else{

       }
  }
       ?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 $idd2 = $row['cauhoi']; 
}

?>
<?php
include("ketnoi.php");
if(isset($_GET['id'])){
	
$data = mysql_real_escape_string($idd2);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM cmm WHERE (idd LIKE '%$data%') LIMIT $idvg,$idvg2");
		if(mysql_num_rows($query)!=0){
			while($row = mysql_fetch_assoc($query)){
				
			 echo "<TR><TD><h3 style='text-align: left;'>Trả lời bởi : <b>".$row['user']."</b> lúc <b>".$row['date']."</b><hr/><br/><font color='red'>";
		$string = $row['noidung']."</font></h3></TD></TR>";
echo make_clickable($string);
		 
				}
		}
		else
		{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy câu trả lời nào!</h3></TD></TR>";		}
}
else
{

}
}
else
{
	
}
?>
  <?php
  if(isset($_GET['id'])){

       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<TR><TD><h2>  <a href ='/traloi?id=".$_GET['id']."' />Trả lời Chủ đề mới</a></h2></TR></TD>";
       }
       else{

       }
  }
       ?>
	     <?php
		  if(isset($_GET['id'])){
  if(isset($_GET['lm'])){

   
     
  }
    else{
    if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<TR><TD><h2>  <a href ='/view?id=".$_GET['id']."&lm=0' />Xem thêm bình luận</a></h2></TR></TD>";
       }
       }
		  }
       ?>
</TABLE>
<!--<TABLE  BORDER="1">
<td>
<div class="fb-comments" data-href="http://hoingay.online/view?id=<?php echo $_GET['id']; ?>" data-numposts="5" width="600"></div>
</td>
<TR><TD>

<h2>Bình luận Facebook</h2></TD></TR>

</TABLE>-->

<TABLE  BORDER="1">
<td>

<div class="fb-like" data-href="http://hoingay.online/view?id=<?php echo $_GET['id']; ?>" data-width="200"></div>
</td>
<td>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="200" data-href="http://hoingay.online/view?id=<?php echo $_GET['id']; ?>"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'vi'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></td>
<TABLE  BORDER="1">
<td>

<div class="fb-share-button" data-href="https://hoingay.online/view?id=<?php echo $_GET['id']; ?>" data-layout="button_count"></div>

</td>
<td>
<a href="https://plus.google.com/share?url=https://hoingay.online/view?id=<?php echo $_GET['id']; ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+"/></a>
    </script>
</td>
</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD>

<h2>Câu hỏi cùng chuyên mục</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY RAND() DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD> Câu Hỏi: <a href='/view?id=".$data['id']."'>".$data['cauhoi']."</a></TD></TR>"; 


}


?>
</TABLE>

<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>-->
</center>
<TABLE BORDER="1"><td>
<center>  <?php include("ads1.php"); ?> </center></td>
</TABLE>
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
   <div class="lt36-footer-copyright">
        	<div class="body">
            	<div class="logof for-home-destop">
				<a href="/"><img src="/images/logo.png"  width="350" alt="logo"/></a>
											
				</div>
               	<div class="menuu"><center><h1>Hỏi Ngay Online</h1><br/><h3>Bản quyền thuộc về hoingay.online Copyright (C) 2015</h3><br/><table id="footer" style="text-align: right;"><TR><TD><h4>Trang này mở ra nhằm mục đích trao đổi  kiến thức cho cộng đồng và xã hội ,
				<br/>những câu hỏi và bài viết có ý thô tục sẽ bị xoá mà không báo trước.</h4></TD></TR></TABLE></center></div>
				</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=372380406281906";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->
