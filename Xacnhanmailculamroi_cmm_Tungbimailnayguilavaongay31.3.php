<?php
session_start();

 if (isset($_SESSION['username']) && $_SESSION['username']){
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
    <title>Trả lời - Hỏi Ngay Online</title>
    <meta name="title" content="Hỏi Ngay Online"/>
    <meta name="KEYWORDS" content="FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap, hoi dap co ngay, hỏi đáp có ngay,hoi ngay online">
    <meta name="DESCRIPTION" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">

    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="AUTHOR" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h"/>
    <meta name="COPYRIGHT" content="Copyright (c) by http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
            <meta name="ROBOTS" content="INDEX, FOLLOW"/>
        <meta name="Googlebot" content="index,follow,archive">
        <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="geo.region" content="Vietnam"/>

    <meta name="og:title" content="Hỏi Ngay Online - Hỏi Đáp Có Ngay"/>
    <meta name="og:description" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h."/>
    <meta name="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
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
	 <body data-base="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
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
	 <center> <?php include("ads2.php"); ?></center></td>
	 </TABLE>
	<div id="menu">
	<ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li><br/>
 

 <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<li><a href='thoat'>Đăng xuất</a></li><br/>
<li><a href='#' accesskey='3' title='Nghe Nhạc'>Nghe Nhạc</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>MyMy</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>Xem Phim</a></li><br/>
";
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li><br/>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li><br/>
<li><a href='#' accesskey='3' title='Nghe Nhạc'>Nghe Nhạc</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>MyMy</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>Xem Phim</a></li><br/>
";
       }
       ?>
</ul>
	</div>
<?php $dbdb = $database_myconn; ?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 $idd2 = $row['cauhoi']; 
 $usss = $row['user']; 

}

$kq2=mysql_query("select * from member where username = '$usss'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row2=mysql_fetch_array($kq2)) 
{ 
 $emaill = $row2['email']; 


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
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO cmm(user, idd, noidung, date)
VALUES ('$username2' ,'$idd', '$noidung', '$datee')";

if ($conn->query($sql) === TRUE) {
   echo "<h2>Trả lời câu hỏi thành công!</h2>";
    echo "<meta http-equiv='refresh' content='0;/view?id=".$_GET['id']."'>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

		else{
		//echo "<center>Thất bại trong việc gửi câu hỏi!</center>";
		}   
			
} 
        
		
	
 ?>
 
 <?php
if(isset($_GET['id']))
{
if(isset($_POST["addd"]))
{
	

$name = 'Hỏi Ngay Online';
	$emaill  = 'trungnhan21.12@gmail.com';
	$subject= 'Thư thông báo gửi từ website';
	$content= "Xin chào, <br> bạn có trả lời từ : <br> <font color='red'>".$_SERVER['HTTP_HOST']."/view?id=".$iddd."</font><br/>Cám ơn bạn đã tham gia cùng Hỏi Ngay Online <br> Truy cập vào http://hoingay.online/dang-nhap để đăng nhập!";
	// khai báo địa chỉ nhận thư. Nếu muốn gửi cùng lúc tới nhiều người thì dùng dấu phảy phân cách các địa chỉ email
	$to  =  $mail;  
	// Khai báo header dùng mã utf-8 để hiển thị tiếng việt 
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: =?UTF-8?B?'.base64_encode($name).'?= <'.$email.'>' . "\r\n";	
	//khai báo nội dung thư theo chuẩn HTML
	$message  = '<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				</head>
				<body>
						<p>Thư gửi từ: '.$name.'<'.$email.'></p>
						<p>Nội dung thư: '.$content.'</p>
				</body>
				</html>';
	// Gửi thư bằng hàm mail của PHP với điều kiện server có hỗ trợ hàm này và có sẵn dịch vụ mail smtp cổng 25
	if(mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers)) 
		echo 'Một email đã được gửi đến bạn!';
	else 
		echo 'Quá trình lấy pass bị lỗi';
	
     
    //Lưu tên đăng nhập
  
    //echo "<meta http-equiv='refresh' content='0;url=/ref-mail'>";
//<div id='css'>Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a></div>";
    die();
	
		}   
			
} 
        
		
	
 ?>
  <?php
  if(isset($_GET['id'])){
         if(isset($_POST['addd']))
         {
			 	$username2 = $_SESSION['username'];
           
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
         
            
            $sql = "UPDATE vieww SET view=view+1 WHERE idd='$username2'" ;
			
            mysql_select_db($dbdb);
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
  }
            ?>
			 <?php
  if(isset($_GET['id'])){
         if(isset($_POST['addd']))
         {
			 	$username2 = $_SESSION['username'];
         
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
         
            
            $sql = "UPDATE topcmm SET view=view+1 WHERE user='$username2'" ;
			
            mysql_select_db($dbdb);
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
  }
            ?>
			
			 <?php
  if(isset($_GET['id'])){
         if(isset($_POST['addd']))
         {
			 	$username2 = $_SESSION['username'];
        
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
         
            
            $sql = "UPDATE diemso SET diem=diem+5 WHERE user='$username2'" ;
			
            mysql_select_db($dbdb);
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
  }
            ?>

<form name="newad" method="post" enctype="multipart/form-data" action="">
<table><TR><TD COLSPAN="2"><h2>Trả lời câu hỏi</h2></TD></TR>
<tr><td><textarea <?php echo $hiden; ?> id="noidung" class="noidung" rows="5" name="noidung" cols="60" placeholder="Nội dung trả lời câu hỏi..." onkeyup="return displayWordCounter();" required minlength="0" maxlength="18000"></textarea></td></tr>
<tr><td><input <?php echo $hiden; ?> name="addd" type="submit" value="Trả lời câu hỏi">
</td></tr> 
</table>
</form>


  <?php include 'footer.php'; ?>

	 </body>
	 </html>
	 <?php
  }
       else{
echo '<meta http-equiv=refresh content="0; URL=/">';
       }
?>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->