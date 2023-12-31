<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<?php
//Khai báo sử dụng session
session_start();

 
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
    //Kết nối tới database
    include('ketnoi.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['user']);
    
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username) {
        echo "Vui lòng nhập đầy đủ email. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysql_query("SELECT email,password FROM member WHERE email='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "Email này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     

    //Lấy mật khẩu trong database ra
    $row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
 
	//khai báo thông tin người gửi, thông tin này sau có thể lấy từ form của website
	$name = 'Hỏi Ngay Online';
	$email  = 'trungnhan21.12@gmail.com';
	$subject= 'Thư thông báo gửi từ website';
	$content= "Xin chào, <br> Mật khẩu của bạn là : <br> <font color='red'>".$row['password']."</font><br/>Chúng tôi đã gửi mật khẩu cho bạn <br> Truy cập vào http://hoingay.online/ref-mail để đăng nhập!";
	// khai báo địa chỉ nhận thư. Nếu muốn gửi cùng lúc tới nhiều người thì dùng dấu phảy phân cách các địa chỉ email
	$to  =  $username;  
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
?>
  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
    echo "<meta http-equiv='refresh' content='0;/'> ";
		
		   
       }
       else{
      
       }
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
	 <body data-base="http://hoingay.online">
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1></center></div>
	<center><h1>Hỏi Ngay Online</h1></center>
<center>
	<div id="menu">
	<ul>
<li><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li>
 
<li><a href="/dang-ky-tai-khoan" accesskey="2" title="Đăng ký">Đăng Ký</a></li>
<li class="current_page_item"><a href="/dang-nhap" accesskey="3" title="Đăng nhập">Đăng Nhập</a></li>
</ul>
	</div>
</center>
	<form action="" method="post">	

<form action="" method="post">
<TABLE  BORDER="1">
<TR><TD COLSPAN="2"><h2>Lấy Lại Pass Hỏi Ngay Online</h2></TD></TR>
<TR><TD>
<label>
Email<span class="req">*</span>
</label>
<input  type="username" name='user' required autocomplete="off"/>
</div>
</TR></TD>
<TR><TD>
<a href="/dang-nhap">Đã nhớ pass , đăng nhập ngay!</a>
</TR></TD>
<TR><TD>
<input id="submit" type='submit' class="button button-block" name="dangnhap" value='Lấy Pass!'/>
</TR></TD>
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