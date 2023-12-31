<?php
session_start();
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="/images/ico.ico"/>

	
<?php




$iddd = $_GET['u'];

 echo "<title>".$iddd." | Hỏi Ngay Online</title>"; 


?>
    <meta name="title" content="Hỏi Ngay Online"/>
    <meta name="KEYWORDS" content="FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap, hoi dap co ngay, hỏi đáp có ngay,hoi ngay online">
   
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


background: #ECE9E6; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #ECE9E6 , #FFFFFF); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #ECE9E6 , #FFFFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
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
	<center><div style="visibility : hidden;"><h1>Hỏi Ngay Online</h1></div></center>
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
<center>
<strong>
<a href="index.html" accesskey="1">Hỏi Ngay Online</a> <!-- BEGIN TEMPLATE: navbar_link -->

	&raquo; <font color="black"><b>Tài khoản</b></font>


<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

	&raquo; 
<?php echo $_GET['u']; ?>

<!-- END TEMPLATE: navbar_link --> 



<!-- END TEMPLATE: navbar_link -->
</strong>
</center>
<TABLE  BORDER="1">
<?php

	echo "<TR><TD COLSPAN='2'>

<h2>Thông tin Thành viên</h2></TD></TR>";
?>
<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from member where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
	echo "<TR><TD><h3>Họ và tên : ".$row['fullname']."</h3></TD></TR>"; 
    echo "<TR><TD><h3>Email : ".$row['email']."</h3></TD></TR>"; 

}
}
?>

</TABLE>
<TABLE  BORDER="1">

<?php

	echo "<TR><TD COLSPAN='2'>

<h2>20 Bài viết của thành viên này</h2></TD></TR>";
?>
<?php
include("ketnoi.php");
if(isset($_GET['u'])){
$data = mysql_real_escape_string($_GET['u']);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM data WHERE (user LIKE '%$data%') LIMIT 10");
		if(mysql_num_rows($query)!=0){
			while($row = mysql_fetch_assoc($query)){
				
			 echo "<TR><TD><h3 style='text-align: left;'>Trả lời bởi : <b>".$row['user']."</b> lúc <b>".$row['date']."</b><hr/><br/><font color='red'>";
		$string = $row['noidung']."</font></h3></TD></TR>";
echo make_clickable($string);
		 
				}
		}
		else
		{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy bài viết nào!</h3></TD></TR>";		}
}
else
{

}
}
else
{
	
}
?>
</TABLE>
<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script></center>-->


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

