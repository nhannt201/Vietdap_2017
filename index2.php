<?php
//Khai báo sử dụng session
session_start();
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="/images/ico.ico"/>
    <title>Hỏi Đáp Có Ngay</title>
    <meta name="title" content="Hỏi Đáp Có Ngay"/>
    <meta name="KEYWORDS" content="FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap">
    <meta name="DESCRIPTION" content="Hỏi Đáp Có Ngay - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">

    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="AUTHOR" content="Hỏi Đáp Có Ngay - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h"/>
    <meta name="COPYRIGHT" content="Copyright (c) by luturu360.com"/>
            <meta name="ROBOTS" content="INDEX, FOLLOW"/>
        <meta name="Googlebot" content="index,follow,archive">
        <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="hoidap.luutru360.com"/>
    <meta name="geo.region" content="Vietnam"/>

    <meta name="og:title" content="Hỏi Đáp Có Ngay - Hỏi ngay có đáp"/>
    <meta name="og:description" content="Hỏi Đáp Có Ngay - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h."/>
    <meta name="og:url" content="http://hoidap.luutru360.com"/>
    <meta name="og:image" content="http://hoidap.luutru360.com/images/logo.png"/>
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

    </head>
	 <body data-base="http://hoidap.luutru360.com/">
	<div class="floating-menu"><center><h1>Hỏi Đáp Có Ngay</h1>
	</center>
	
	</div>
	<center><h1>Hỏi Đáp Có Ngay</h1></center>
		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>
	<div id="menu">
	<ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li><br/>
 

  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo '<li><a href="thoat">Đăng xuất</a></li>';
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li><br/>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li><br/>";
       }
       ?>
</ul>
	</div>
	
	<!--Hoc tap-->
<TABLE  BORDER="1">
<TR><TD COLSPAN="2"><h2>Học Tập</h2></TD></TR>
<TR><TD><a href="/xem?chude=sinhhoc">Sinh Học</a></TD><TD><a href="">Vật lý</a></TD></TR>
<TR><TD><a href="">Hoá Học</a></TD><TD><a href="">Công nghệ</a></TD></TR>
<TR><TD><a href="">Toán</a></TD><TD><a href="">Ngữ Văn</a></TD></TR>
<TR><TD><a href="">Tiếng Anh</a></TD><TD><a href="">Giáo dục công dân</a></TD></TR>
<TR><TD><a href="">Lịch Sử</a></TD><TD><a href="">Địa lí</a></TD></TR>
<TR><TD><a href="">Tin học</a></TD><TD><a href="">Thể dục</a></TD></TR>
<TR><TD><a href="">Nhạc</a></TD><TD><a href="">Hoạ</a></TD></TR>
<TR><TD><a href="">Kĩ thuật công nghệ</a></TD><TD><a href="">Giáo dục quốc phòng</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Làm thế nào để giải bài Toán này ! Help với!</a></h2></TD></TR>
</TABLE>
<!--Lap trinh web-->
<TABLE BORDER="1">
<TR><TD COLSPAN="2"><h2>Lập trình web</h2></TD></TR>
<TR><TD><a href="">PHP</a></TD><TD><a href="">HTML</a></TD></TR>
<TR><TD><a href="">Perl</a></TD><TD><a href="">MySQL</a></TD></TR>
<TR><TD><a href="">CSS</a></TD><TD><a href="">JSP</a></TD></TR>
<TR><TD><a href="">ASP</a></TD><TD><a href="">JavaScript</a></TD></TR>
<TR><TD><a href="">Ajax</a></TD><TD><a href="">NodeJS</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Cách sử dụng hàm trong PHP</a></h2></TD></TR>
</TABLE>
<!--May tinh-->
<TABLE BORDER="1">
<TR><TD COLSPAN="2"><h2>Máy tính</h2></TD></TR>
<TR><TD><a href="">PC</a></TD><TD><a href="">Setup</a></TD></TR>
<TR><TD><a href="">Virus</a></TD><TD><a href="">Uninstall</a></TD></TR>
<TR><TD><a href="">Lags</a></TD><TD><a href="">Games</a></TD></TR>
<TR><TD><a href="">Error</a></TD><TD><a href="">Ghost</a></TD></TR>
<TR><TD><a href="">Update</a></TD><TD><a href="">Setting</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Lỗi cài đặt games GATA5</a></h2></TD></TR>
</TABLE>
<!--Webmaster-->
<TABLE BORDER="1">
<TR><TD COLSPAN="2"><h2>Webmaster</h2></TD></TR>
<TR><TD><a href="">Thảo luận chung</a></TD><TD><a href="">Công cụ cho webmaster</a></TD></TR>
<TR><TD><a href="">SEO, Google Optimization</a></TD><TD><a href="">Hosting-Domain Miễn Phí</a></TD></TR>
<TR><TD><a href="">Chuyên đề htaccess</a></TD><TD><a href="">Sử dụng-hỏi đáp liên quan</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Lỗi cài đặt I-Faker Desktop Pro- Soft</a></h2></TD></TR>
</TABLE>
<!--Lập trình ứng dụng Desktop-->
<TABLE BORDER="1">
<TR><TD COLSPAN="2"><h2>Lập trình ứng dụng Desktop</h2></TD></TR>
<TR><TD><a href="">Visual Basic 6.0</a></TD><TD><a href="">Visual Basic .NET</a></TD></TR>
<TR><TD><a href="">C ASCII/ C++</a></TD><TD><a href="">Visual C++</a></TD></TR>
<TR><TD><a href="">Pascal</a></TD><TD><a href="">Visual C#</a></TD></TR>
<TR><TD><a href="">Java</a></TD><TD><a href="">Delphi - Orther</a></TD></TR>
<TR><TD><a href="">XNA</a></TD><TD><a href="">Ruby</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Làm sao để hiện thông báo trong VB6?</a></h2></TD></TR>
</TABLE>
<!--Lập trình ứng dụng di động-->
<TABLE BORDER="1">
<TR><TD COLSPAN="2"><h2>Lập trình ứng dụng di động</h2></TD></TR>
<TR><TD><a href="">Android</a></TD><TD><a href="">iOS</a></TD></TR>
<TR><TD><a href="">Windows Phone</a></TD><TD><a href="">J2ME</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Cách sử dụng Base...?</a></h2></TD></TR>
</TABLE>
<!--Khác-->
<TABLE BORDER="1">
<TR><TD COLSPAN="2"><h2>Khác</h2></TD></TR>
<TR><TD><a href="">Đời sống</a></TD><TD><a href="">Vũ trụ</a></TD></TR>
<TR><TD><a href="">Tử vi</a></TD><TD><a href="">Tin học</a></TD></TR>
<TR><TD><a href="">Tiền bạc</a></TD><TD><a href="">Khoa học</a></TD></TR>
<TR><TD><a href="">Xem bối</a></TD><TD><a href="">Công nghệ</a></TD></TR>
<TR><TD><a href="">Gia Đình</a></TD><TD><a href="">Tình Yêu</a></TD></TR>
<TR><TD COLSPAN="2"><h2>Câu hỏi mới: <a href="">Tử vi của bạn là gì?</a></h2></TD></TR>
</TABLE>


   <div class="lt36-footer-copyright">
        	<div class="body">
            	<div class="logof for-home-destop">
				<a href="/"><img src="/images/logo.png"  width="350" alt="logo"/></a>
											
				</div>
               	<div class="menuu"><center><h1>Hỏi Đáp Có Ngay</h1><br/><h3>Bản quyền thuộc về Luutru360.com Copyright (C) 2015</h3><br/><table id="footer" style="text-align: right;"><TR><TD><h4>Trang này mở ra nhằm mục đích trao đổi  kiến thức cho cộng đồng và xã hội ,
				<br/>những câu hỏi và bài viết có ý thô tục sẽ bị xoá mà không báo trước.</h4></TD></TR></TABLE></center></div>
				</div>

	 </body>
	 </html>
	 <!-- Copyright (C) Dien dan chia se kien thuc Luutru360.com - Luu tru 360 2015 -->

