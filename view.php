﻿<?php
@session_start(); 
include('allinones.php');

if (isset($_GET['id'])) {
	
} elseif (isset($_GET['v'])) {
	
}else {

header ("Location: /");
}


?>
<?php
$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$loaiboks = str_replace('"',"'",stripslashes($row['cauhoi']) );

}
$cauhoi2 = convert_vi_to_en($loaiboks);
 $gcauhoi2 =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi2);  
 
$urlhientai = "http://hoingay.luutru360.com/". $_SERVER['REQUEST_URI'];
	//echo "<!--".$urlhientai."-->";
	$aaa = 'http://hoingay.luutru360.com/'.$gcauhoi2 .'/'.$_GET['id'].'.html';
	//echo "<!--".$aaa."-->";

$pos = strpos($urlhientai , "view?id=");
 
  if ($pos !== false) {
    //Tìm thấy
    echo '<meta http-equiv="refresh" content="0;'.$aaa.'">';
   // header ("Location: $aaa");
exit;
  } else {
    // Không tìm thấy
  }

?>
<html lang="vi">
<head>
       <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>
        <link rel="Shortcut Icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico" type="image/x-icon" />
   <meta property="fb:admins" content="100006476596425" /> 

	<?php
	
	$idvg = "0";
	$idvg2 = "5";
	?>
		<?php



if (isset($_GET["mail"])) {
$iddd2 = $_GET['id'];
	} else {
	$iddd2 = '0';	
	}



?>
	<?php

 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $loaiboks );  
	$sharefb2 = $gcauhoi."/".$_GET['id'].'.html';
	
	
//
  //echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 
?>
	
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$loaiboks = str_replace('"',"'",stripslashes($row['cauhoi']) );
 echo "<title>".$loaiboks."</title>"; 
 echo ' <meta name="title" content="'.$loaiboks.'"/>'; 
  echo ' <meta itemprop="name" content="'.$loaiboks.'">';
	
	echo '	<meta name="DC.Title" content="'.$loaiboks.'" />';
}


?>

   
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 
$keyy2 = convert_vi_to_en($row['cauhoi']);
$tukhoa = str_replace(" ",", ",$keyy2);
$dataa2 = str_replace("<br />","",$row['noidung']);
$daaa = substr($dataa2,0,333);
$tukhoa2 = str_replace(" ",", ",$daaa);
$tukhoa3 = str_replace(" ",", ",$keyy2);
$tukhoa4 = str_replace("[","",$tukhoa3);
$tukhoa4 = str_replace('"','',$tukhoa4);
$tukhoa5 = str_replace("]","",$tukhoa4);

$tukhoa6 = str_replace("[","",$tukhoa);
$tukhoa6 = str_replace('"','',$tukhoa6);
$tukhoa7 = stripBBCode(str_replace("]","",$tukhoa6));

$tukhoa8 = str_replace("[","",$tukhoa2);
$tukhoa8 = str_replace('"','',$tukhoa8);
$tukhoa9 = stripBBCode(str_replace("]","",$tukhoa8));

$tukhoa10 = str_replace("[","",$row['cauhoi']);
$tukhoa11 = str_replace("]","",$tukhoa10);

$tukhoa12 = stripBBCode(str_replace('"','',$tukhoa11));

 
$kqcuoi = $tukhoa11.' '.$tukhoa12.' '.$tukhoa7.' '.$tukhoa9;
$kqcuoi = str_replace('"',"'",$kqcuoi );

echo ' 
<meta name="keywords" content="'.$kqcuoi.'">'; 
}

?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$editlai2 = stripBBCode(str_replace("<br />","",$row['noidung']));
$editlai = stripBBCode(str_replace(" \ ","",$editlai2));

//$daa = substr($editlai, 0, -150);
$tongso = stripBBCode(strlen($editlai));
if ($tongso < 266) {
 echo '<meta name="description" content="'.$editlai.'">'; 
 echo '	<meta name="DC.Description" content="'.$editlai.'...">'; 
}
else {
	$daaaa = substr($editlai,0,266);
	$daaaa2 = str_replace('"','',$daaaa);
	echo '
	<meta name="description" content="'.$daaaa2.'...">
	'; 
	echo '
	<meta name="DC.Description" content="'.$daaaa2.'...">
	'; 
}
}

?>
	
 
       <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>


<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$editlai = str_replace("<br />","",$row['cauhoi']);
// echo "<meta name='og:title' content='".$editlai."'/>"; 
$paths = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];

//echo "<meta content='".$paths."' property='og:url'/>
//<meta content='".$editlai."' property='og:title'/>
//";
$loaiboks2 = str_replace('"',"'",$editlai );

echo '<meta property="og:title" content="'.$loaiboks2 .'">';
}

?>

<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$editlai = str_replace("<br />","",$row['noidung']);
 $tongso = strlen($editlai);
if ($tongso < 266) {
 //echo '<meta itemprop="description" content="'.$editlai.'">'; 
}
else {
	$daaaa = substr($editlai,0,266);
//	echo '<meta itemprop="description" content="'.$daaaa.'...">'; 
}

}

?>
	

  
<!--<link rel='stylesheet' type='text/css' href='http://<?php echo $_SERVER['HTTP_HOST'] ?>/css/ver2.css' />-->

<style>
<?php  include("css/ver2.css"); ?>
</style>


<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>
<?php 
//include('popads.php'); 
?>

    </head>
	 <body data-base="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
	

<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo "<h1>".stripslashes($row['cauhoi'])."</h1>"; 
 //$tieudelon =  $row['cauhoi']; 

}

?>
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
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li>
	    <li><a href='/member.php'>Thống kê</a></li>

";
       }
       ?>
  </ul>
</div>

 <!-- <h1>Hỏi Ngay Online</h1>-->
  
 <div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>
<br/>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="share2" id="share2"><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5729b832169060b7"></script> </div>
<center>


<?php
	 if (isset($_SESSION['username']) && $_SESSION['username']){
          echo '<h3>Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!</h3>';
	 } else {
		 
	 }
	?>
<nav>

<span><a href="/" accesskey="1">Bài viết</a></span>
	&raquo; <span><font color="black"><b>Hỏi Đáp</b></font></span>

</span>

	&raquo;<span> 
<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");


$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
	$userin = $row['user'];
//lay id member

$getidmb=mysql_query("SELECT id from member where username = '$userin'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row2=mysql_fetch_array($getidmb)) 
{ 

$id2 = mysql_real_escape_string($row2['id']);

}
//het lay id member 
echo "<a href='http://".$_SERVER['HTTP_HOST']."/member/".$row['user']."/".$id2.".html'>".$row['user']."</a>";


}
}
?>
</span>

</nav>
</center>
<!-- END TEMPLATE: navbar_link -->

<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
include 'bbcode.php';

$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$xemcaida = stripslashes($row['noidung']);
$audio = str_replace("<br />", "", $xemcaida);
$html_code	= bbcode::tohtml($audio,TRUE);

//$audio = str_replace("[img]", "<img src='", $xemcaida);
//$noidung2 = str_replace("[/img]", "' width='560' height='315'/>", $audio);
//$audio2 = str_replace("[youtube]", "<iframe width='300'src='", $noidung2);
//$noidung = str_replace("[/youtube]", "' frameborder='0' allowfullscreen></iframe>", $audio2);
 if ($_SESSION['username'] == $row['user']){
$quyenedit = $row['user']." | <a href='/edit?id=".$iddd."'>Chỉnh sửa bài viết</a>";
$thanhviendang = $row['user'];
 } else {
	$quyenedit = $row['user']; 
	$thanhviendang = $row['user'];
 }
	echo "<table class='table'>
  <tr>

<th class='table__heading'><center>Đăng bởi <b>".$quyenedit."</b>  </center>";
$paths = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
$thichlike = '<div class="fb-like" data-href="'.$paths.'" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-share="false"></div>';

  echo "<TR><TD><h3>Lúc <i>".$row['date']."</i></h3></TD></TR><TR><TD><h3 style='text-align: center;'> <font color='00000' size='5'>".stripslashes($row['cauhoi'])."</font></h3>"; 
 
   $string = "<div style='text-align: left;'><b>Nội dung:</b> <br/><br/><font size='4' color='00000'>".$html_code."</font><p></div><div style='text-align: right;'><b>Nguồn : ".$_SERVER['SERVER_NAME']."</b><p> Vui lòng ghi rõ nguồn nếu phát hành lại bài viết.<p></div><div class='dexuat'><hr><p><b>Đề xuất bạn bè:</b> <p>".$thichlike."</div></TD></TR>"; 
echo make_clickable($string);
echo '<div class="quangcao" id="quangcao" align="center">
<script src="//www.adsptp.com/15204-468x60.js"></script> 
</div>';

}
if(mysql_num_rows($kq) == 0) {
     // row not found, do stuff...
     $cola = "000";
      echo '<center><h2>Trang bạn yêu cầu hiện không có!<p><a href="/">Về trang chủ</a></h2></center>';

 include 'footer2.php'; 

     exit;

    
    //$URL="/";
//header ("Location: $URL");

} else {
    // do other stuff...
} 
}


	
//if ($cola = "000") { echo '<!--';} ?><TR><TD><h2 style='text-align: center;' name='cmt' id='cmt'>Phản hồi</h2></TD></TR>
<?php
  if(isset($_GET['lm'])){

       if (isset($_SESSION['username']) && $_SESSION['username']){
        
		  $idvg2 = $_GET['lm'] + 5;
		  $idvg = $idvg2 - 5;
		   echo "<TR><TD><h2>  <a href ='/view?id=".$_GET['id']."&lm=".$idvg2."' />Xem thêm phản hồi</a></h2></TR></TD>";
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
			echo '<TR><TD>';
			while($row = mysql_fetch_assoc($query)){
				
			 echo "<h3 style='text-align: left;'>Phản hồi bởi : <i>".$row['user']."</i> lúc <b>".$row['date']."</b><hr/><br/><font color='red'>";
		$string = $row['noidung']."</font></h3>";
echo make_clickable($string);
		 
				}
				echo '</TD></TR>';
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
      //    echo "<TR><TD><h2>  <a href ='/traloi?id=".$_GET['id']."' />Trả lời Chủ đề mới</a></h2></TR></TD>";
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
<?php  if (isset($_SESSION['username']) && $_SESSION['username']){
?>
<form name="newad" method="post" enctype="multipart/form-data" action="">
<table><TR><td><h2>Trả lời câu hỏi</h2>
<textarea <?php echo $hiden; ?> id="noidung" class="noidung" rows="5" name="noidung" cols="60" placeholder="Nội dung trả lời câu hỏi..." onkeyup="return displayWordCounter();" required minlength="0" maxlength="18000"></textarea></td></tr>
<br/><tr><td><input <?php echo $hiden; ?> name="addd" type="submit" value="Trả lời câu hỏi"></td></tr> 
</table>
</form>
<?php
//if ($cola = "000") { echo '-->'; echo '<center>Không tìm thấy câu hỏi yêu cầu!</center>';} 
  }
     
?>
<?php
$cauhoi = convert_vi_to_en($idd2);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	$sharefb = $gcauhoi."/".$_GET['id'].'.html';
//
  //echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 
?>

<!--#phan commed-->


<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq25=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row01=mysql_fetch_array($kq25)) 
{ 
 $idd2 = $row01['cauhoi']; 
 $usss = $row01['user']; 

}

$kq22=mysql_query("select * from member where username = '$usss'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row23=mysql_fetch_array($kq22)) 
{ 
 $emaill = $row23['email']; 


}
?>
<?php
if(isset($_GET['id'])){
if(isset($_POST["addd"]))
{
	
	$username2 = $_SESSION['username'];
$idd =  strip_tags($idd2);
$noidung = nl2br(strip_tags($_POST['noidung']));
$timezone = +7;
$datee =  ''.gmdate("H:i:s | d-m-Y ", time() + 3600*($timezone+date("I"))).'';



// Create connection
$conn = new mysqli($hostname_myconn, $username_myconn, $password_myconn, $database_myconn);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO cmm(user, idd, noidung, date)
VALUES ('$username2' ,'$idd', '$noidung', '$datee')";
$sql2 = "INSERT INTO thongbao(user, date)
VALUES ('$thanhviendang' ,'$iddd')";
if ($thanhviendang == "Khách") {
	 if ($conn->query($sql) === TRUE){
   echo "<h2>Trả lời câu hỏi thành công!</h2>";
    echo "<meta http-equiv='refresh' content='0;/view?id=".$_GET['id']."#cmt'>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {


  //     if ($_SESSION['username'] == $thanhviendang){
  // if ($conn->query($sql) === TRUE) {
  // echo "<h2>Trả lời câu hỏi thành công!</h2>";
    //echo "<meta http-equiv='refresh' content='0;/view?id=".$_GET['id']."'>";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
//}
	//   } else {
		   if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE){
   echo "<h2>Trả lời câu hỏi thành công!</h2>";
    echo "<meta http-equiv='refresh' content='0;/view?id=".$_GET['id']."#cmt'>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	  // }

}
$conn->close();

}

		else{
		//echo "<center>Thất bại trong việc gửi câu hỏi!</center>";
		}   
			
} 
        
		
	
 ?>
 
 
 



<!--#het commed-->
<div class="quangcao" id="quangcao" align="center"><script src="//www.adsptp.com/15204-468x60.js"></script></div>

<?php


	echo "<table class='table'>
  <tr>

<th class='table__heading'>Bài viết cùng chuyên mục</th> </tr>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY RAND() DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
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
  echo "<tr class='table__row'> <td class='table__content' data-heading='Bài viết cùng chuyên mục'> Chủ đề: <a href='/".$gcauhoi."/".$data['id'].".html'>".(stripslashes($data['cauhoi']))."</a></td> </tr>"; 


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
  <?php include("ads1.php"); ?> 
<TABLE BORDER="1"><td>
<center> <h3>Sau 7 ngày, những thông báo trả lời sẽ tự xoá đi để dọn máy chủ. </h3></center></td>
</TABLE>

<script>
<?php include("js/jq20.js"); ?>
</script>
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

<style class="cp-pen-styles">

    .form {
        background:rgba(19, 35, 47, 0.9);
        padding:40px;
        max-width:600px;
        margin:40px auto;
        border-radius:4px;
        box-shadow:0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }
 

    label .req {
        margin:2px;
        color:#1ab188;
    }
    label.active {
        -webkit-transform:translateY(50px);
        -ms-transform:translateY(50px);
        transform:translateY(50px);
        left:2px;
        font-size:14px;
    }
    label.active .req {
        opacity:0;
    }
    label.highlight {
        color:#ffffff;
    }
    input, textarea {
        font-size:22px;
        display:block;
        width:100%;
      
        padding:5px 10px;
        background:none;
        background-image:none;
        border:1px solid #a0b3b0;
        color:#000000;
        border-radius:0;
        -webkit-transition:border-color .25s ease, box-shadow .25s ease;
        transition:border-color .25s ease, box-shadow .25s ease;
    }
    input:focus, textarea:focus {
        outline:0;
        border-color:#1ab188;
    }
    textarea {
        border:2px solid #a0b3b0;
        resize:vertical;
    }
    .field-wrap {
        position:relative;
        margin-bottom:40px;
    }
    .top-row:after {
        content:"";
        display:table;
        clear:both;
    }
    .top-row>div {
        float:left;
        width:48%;
        margin-right:4%;
    }
    .top-row>div:last-child {
        margin:0;
    }
    .button {
        border:0;
        outline:none;
        border-radius:0;
        padding:15px 0;
        font-size:2rem;
        font-weight:600;
        text-transform:uppercase;
        letter-spacing:.1em;
        background:#007baf;
        color:#ffffff;
        -webkit-transition:all 0.5s ease;
        transition:all 0.5s ease;
        -webkit-appearance:none;
    }
    .button:hover, .button:focus {
        background:#007bbf;
    }
    .button-block {
        display:block;
        width:100%;
    }
    .forgot {
        margin-top:-20px;
        text-align:right;
    }
</style>
<center><h3>Bảo vệ bản quyền bởi <a href="http://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> DMCA </a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></h3></center>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1050933161614743";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
include("ketnoi.php");
// sql to delete a record
 if (isset($_SESSION['username']) && $_SESSION['username']){
	 if (isset($_GET['messger'])) {
$monop = $_GET['messger'];
$idk = $_GET['id'];
$sql="select * from thongbao where date='".$idk."'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$xoatatcall = $row['id'];
$layuser = $row['user'];
$sosanhvs = $_SESSION['username'];
if ($sosanhvs = $layuser) {
$sql="delete from thongbao where id='".$xoatatcall."'";
mysql_query($sql);
//echo $_SESSION['username'] ;
//echo $layuser;
}

///
	 }
	
 } 

?>

<a class="back-to-top" href="#">Lên đầu trang</a>
<?php echo '<!--<center>'; include("autoping.php"); echo '</center>-->';?>

 <?php include 'footer2.php'; ?>


 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->

