<?php
session_start();


        include('ketnoi.php');
 if (isset($_SESSION['username']) && $_SESSION['username']){
 echo '<meta http-equiv="refresh" content="0;/add">';
       }
?>
<?php
$hiden = "";
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>
    <title>Đặt câu hỏi - Hỏi Ngay Online</title>
   <link rel="icon" type="image/png" href="/images/ico.ico"/>
<link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />
<link rel='stylesheet' type='text/css' href='/css/ver2.css' />
 <meta name='description' content='Hỏi Ngay Online - Đặt câu hỏi - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
<meta property="og:title" content="Hỏi Ngay Online - Đặt câu hỏi">
<meta property="og:description" content="Hỏi Ngay Online - Đặt câu hỏi -  Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">
<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
<meta name="twitter:card" content="summary">



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
		   font-family: "Times New Roman", Times, serif;
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
<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>

    </head>
	 <body data-base="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
	

  <h1>Đặt câu hỏi - Một số tính năng không có cho <b>GUEST</b></h1>


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
 echo '<meta http-equiv="refresh" content="0;/add">';
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

 <div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>
<?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo '<br/>
		<h3>Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!</h3>';
       }
       else{
//echo '<meta http-equiv=refresh content="0; URL=/">';
       }
       ?>
	   	   
	 <?php #include("ads2.php"); ?>




<?php
if(isset($_POST["addd"]))
{
	
	$username2 = "Khách";
$cauhoi2 = strip_tags($_POST['tieude']);
$cauhoi3 = str_replace("'", "", $cauhoi2);
$cauhoi4 = str_replace(",", "", $cauhoi3);
$cauhoi = mysql_real_escape_string(str_replace("#", "", $cauhoi4));
$noidung = mysql_real_escape_string(nl2br(strip_tags($_POST['noidung'])));
$timezone = +7;
$datee =  ''.gmdate("H:i:s | d-m-Y", time() + 3600*($timezone+date("I"))).'';
//kiem tra cau hoi co 
$checkcauhoi = $cauhoi;
$ck1 = strlen(trim($checkcauhoi));
if (($ck1) > 5) {
//echo "cho phép";
} else {
$cauhoi = substr($noidung , 0, 120);  // abcd
}
//
//kiem tra nd co 
$checknoidung = $noidung;
$ck2 = strlen(trim($checkcnoidung));

if (($ck2) < 10) {
//echo "cho phép";
} else {
$noidung = $cauhoi;

}
//
//kt co ca 2 title va nd

if (($ck1) + ($ck2) > 5) {

} else {
echo "<center><h2>Bạn chưa nhập bất kì nội dung nào!</h2><br/> <img src='http://i.imgur.com/Ko6AzqO.png' width='200px'/><p></center>";
 include 'footer2.php';

	echo ' </body>
	 </html>';
exit;
}


//kiem cauhoi
  $query = "select * from data where cauhoi like '%$cauhoi%'";
 
                // Kết nối sql
             //   mysql_connect("localhost", "root", "vertrigo", "basic");
 
                // Thực thi câu truy vấn
                $kil = mysql_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysql_num_rows($kil);
				 if ($num > 0 && $cauhoi != "") 
                {
echo '<h2>Câu hỏi này đã tồn tại! Vui lòng nhập một câu hỏi khác!</h2>';
                    } else {
						// Create connection
$conn = new mysqli($hostname_myconn, $username_myconn, $password_myconn, $database_myconn);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO data(user, cauhoi, noidung, date)
VALUES ('$username2' ,'$cauhoi', '$noidung', '$datee')";

if ($conn->query($sql) === TRUE) {
   echo "<h2>Chủ đề mới đã được POST!</h2>";
   echo '<meta http-equiv=refresh content="0; URL=/chuyen-gia-giai-dap">';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

					}
//end cau hoi

}

		else{
		//echo "<center>Thất bại trong việc gửi câu hỏi!</center>";
		}   
       
        
 ?>
 



<form name="newad" method="post" enctype="multipart/form-data" action="">
<table>
<TR><TD COLSPAN="2"><h2>Đặt câu hỏi</h2></TD></TR>
<tr><td><input <?php echo $hiden; ?> type="text" name="tieude" placeholder="Tên chủ đề, bài viết" maxlength="220" onkeyup="return displayWordCounter();" required minlength="0"></td></tr>
<tr><td><textarea <?php echo $hiden; ?> id="noidung" class="noidung" rows="15" name="noidung" cols="90" placeholder="Nội dung bài viết..." onkeyup="return displayWordCounter();" required minlength="0" maxlength="50000"></textarea></td></tr>
<tr><td><input <?php echo $hiden; ?> name="addd" type="submit" value="Đăng bài viết">
</td></tr> 
</table>
</form>


  <?php include 'footer2.php'; ?>

	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->