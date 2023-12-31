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
    $sinhnhat = addslashes($_POST['ngaysinh']);
	$repassword = addslashes($_POST['repass']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$sinhnhat) {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
 
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysql_query("SELECT username, password, birthday FROM member WHERE username='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
  
     
	 if ($row['birthday'] == "") {
		  echo "Bạn chưa cập nhật ngày sinh. Chức năng này bị vô hiệu hoá! <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit; 
	 } else {
		  if ($sinhnhat != $row['birthday']) {
        echo "Ngày sinh bạn không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } 
	 }
    //Lưu tên đăng nhập
   
	//qua trinh pass moi

         $xaydungps = md5($repassword);
            
            $sql = "UPDATE member SET password='$xaydungps' WHERE username='$username'" ;
            mysql_select_db($database_myconn);
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Không thể tạo mật khẩu mới error: ' . mysql_error());
            }
            //echo "Updated data successfully\n";
             $_SESSION['username'] = $username;
    echo "<meta http-equiv='refresh' content='0;url=/'>";
            mysql_close($conn);
         }
         else
         {
			    }
	
	//het qua trinh pass news
//<div id='css'>Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a></div>";
   // die();
//}
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
    <title>Đăng Nhập - Hỏi Ngay Online</title>
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
    <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' type='text/css' href='css/ver2.css' />


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

	<form action="" method="post">	

<form action="" method="post">
<TABLE  BORDER="1">
<TR><TD COLSPAN="2"><h2>Làm mới mật khẩu</h2></TD></TR>
<TR><TD>
<label>
Tài khoản<span class="req">*</span>
</label>
<input  type="username" name='user' required autocomplete="off"/>
</div>
</TR></TD>
<TR><TD>
<label>
Ngày sinh (Vd: 05/10/2001)<span class="req">*</span>
</label>
<input  type="text" name='ngaysinh' required autocomplete="off"/>
</div>
</TR></TD>
<TR><TD>
<label>
Mật khẩu mới<span class="req">*</span>
</label>
<input  type="password" name='repass' required autocomplete="off"/>
</div>
</TR></TD>
<TR><TD>
<a href="/.ref-mail">Quên mật khẩu?</a>
</TR></TD>
<TR><TD>
<input id="submit" type='submit' class="button button-block" name="dangnhap" value='Đăng nhập'/>
</TR></TD>
</table>
</form>
<h1>Copyright © 2016 Hỏi Ngay Online</h1>
</div>

<?php include 'footer.php'; ?>

	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->