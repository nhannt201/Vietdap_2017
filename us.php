<?php
@session_start();

include('allinones.php');
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>

	
<?php

if (isset($_GET['u'])) {
	$iddd = $_GET['u'];

} else {
	$iddd = "Khách";
}



 echo "<title>".$iddd." | Hỏi Ngay Online</title>"; 


?>
   
    <meta name="KEYWORDS" content="<?php echo $iddd; ?>,hoi dap,hoi ngay online">
   
   
    <meta name="geo.region" content="Vietnam"/>

    
    <meta name="og:description" content="Thành viên <?php echo $iddd; ?> - Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h."/>
    <meta name="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel='stylesheet' type='text/css' href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/ver2.css' />




<!--
tbody tr:hover{
    background: #B8C6D7;
}
-->

    </head>
	 <body>
	
	<div class="content">

  <div class="menu2 group">
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

   <?php include 'ads2.php'; ?>

<center><p>
<strong>
<a href="/" accesskey="1">Hỏi Ngay Online</a> <!-- BEGIN TEMPLATE: navbar_link -->

	&raquo; <font color="black"><b>Tài khoản</b></font>


<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

	&raquo; 
<?php 
if (isset($_GET['u']))  {
	echo "<a href='/member/".$_GET['u']."/".$_GET['id'].".html'>".$_GET['u']."</a>"; 
} else {
	echo "Khách"; 
}

?>

<!-- END TEMPLATE: navbar_link --> 



<!-- END TEMPLATE: navbar_link -->
</strong>
</center>
<TABLE  BORDER="1">
<?php

	echo "

<h2>Thông tin Thành viên</h2>";
?>
<?php
if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from member where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
	echo "<TR><TD><h3>Họ và tên : <b>".$row['fullname']."</b></h3>"; 
    echo "<h3>NickName : ".$row['username']."</h3></TD></TR>"; 

}
} else {
	echo "<TR><TD><h3>Họ và tên : Khách qua đường</h3>"; 
    echo "<h3>NickName : guest@guest.com</h3></TD></TR>"; 
}
?>

</TABLE>
<TABLE  BORDER="1">

<?php

	echo "

<h2>Một số bài viết của thành viên này</h2>";
?>
<?php
include("ketnoi.php");
if(isset($_GET['u'])){
$data = mysql_real_escape_string($_GET['u']);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM data WHERE (user LIKE '%$data%') ORDER BY RAND() LIMIT 10");
		if(mysql_num_rows($query)!=0){
			while($row = mysql_fetch_assoc($query)){
				$cauhoi = convert_vi_to_en(stripslashes($row['cauhoi']));
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
 $string = strip_tags($row['noidung']);
 if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 200);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}
			 echo "<TR><TD><h3 style='text-align: left;'><i>".$row['user']."</i> đăng lúc <b>".$row['date']."</b><hr/><br/><font color='red'>";
		$string = stripBBCode($string)."</font></h3></TD></TR>";
		  echo "<font color='black'><b>Xem thêm :</b></font>	 <a href='/".$gcauhoi."/".$row['id'].".html'>".stripslashes($row['cauhoi'])."</a><p>";
echo make_clickable($string);
		 
				}
		}
		else
		{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy bài viết nào của thành viên!</h3></TD></TR>";		}
}
else
{

}
}
else
{
	echo "<TR><TD><h3 style='text-align: left;'>Khách có thể xem, không có bài viết</h3></TD></TR>";		

}
?>
</TABLE>
<h1>Copyright © 2016 Hỏi Ngay Online</h1>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80502987-6', 'auto');
  ga('send', 'pageview');

</script>

</div>

	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->
