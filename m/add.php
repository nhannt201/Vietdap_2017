<?php
session_start();
    include('ketnoi.php');
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
        height:100%;
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
	 <center>  <a href="#"><img src="https://www.fshare.vn/media/banner_Fshare/Fshare_760x90.png" width="550" height="”200”"></a></center></td>
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
if(isset($_POST["addd"]))
{
	
	$username2 = $_SESSION['username'];
$cauhoi2 = strip_tags($_POST['tieude']);
$cauhoi3 = str_replace("'", "", $cauhoi2);
$cauhoi = str_replace("#", "", $cauhoi3);
$noidung = nl2br(strip_tags($_POST['noidung']));
$timezone = +7;
$datee =  ''.gmdate("H:i:s | d-m-Y ", time() + 3600*($timezone+date("I"))).'';



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO data(user, cauhoi, noidung, date)
VALUES ('$username2' ,'$cauhoi', '$noidung', '$datee')";

if ($conn->query($sql) === TRUE) {
   echo "<h2>Đặt câu hỏi thành công!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

		else{
		//echo "<center>Thất bại trong việc gửi câu hỏi!</center>";
		}   
       
        
 ?>
  <?php
  
         if(isset($_POST['addd']))
         {
			 	$username2 = $_SESSION['username'];
            
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
         
            
            $sql = "UPDATE vieww SET view=view+1 WHERE idd='$username2'" ;
            mysql_select_db('u849094575_hoi');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            //echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
			    }
		 
            ?>
			
			 <?php

         if(isset($_POST['addd']))
         {
			 	$username2 = $_SESSION['username'];
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
         
            
            $sql = "UPDATE chudee SET view=view+1 WHERE user='$username2'" ;
            mysql_select_db('u849094575_hoi');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            //echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
			    }
		 
            ?>
				 <?php
 
         if(isset($_POST['addd']))
         {
			 	$username2 = $_SESSION['username'];
           
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
         
            
            $sql = "UPDATE diemso SET diem=diem+10 WHERE user='$username2'" ;
            mysql_select_db('u849094575_hoi');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            //echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
			    }
		 
            ?>

<form name="newad" method="post" enctype="multipart/form-data" action="">
<table>
<TR><TD COLSPAN="2"><h2>Chủ đề mới</h2></TD></TR>
<TR><TD COLSPAN="2"><h4>BBCODE Hỗ Trợ: [img]URL[/img]</h4></TD></TR>
<tr><td><input <?php echo $hiden; ?> type="text" name="tieude" placeholder="Câu hỏi chủ đề" maxlength="120" onkeyup="return displayWordCounter();" required minlength="0"></td></tr>
<tr><td><textarea <?php echo $hiden; ?> id="noidung" class="noidung" rows="15" name="noidung" cols="90" placeholder="Nội dung thêm cho phần câu hỏi..." onkeyup="return displayWordCounter();" required minlength="0" maxlength="50000"></textarea></td></tr>
<tr><td><input <?php echo $hiden; ?> name="addd" type="submit" value="Đặt câu hỏi">
</td></tr> 
</table>
</form>



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