<?php
if (file_exists("laivt_firewall.php"))
    include_once "laivt_firewall.php";  


include 'ketnoi.php';
include('allinones.php');
?>
<?php
$hiden = "";
?>
<!DOCTYPE html>
<html lang='vi'>
<head>  
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Hỏi Ngay Online</title>
<link rel="icon" type="image/png" href="/images/ico.ico"/>
<link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />
<link rel='stylesheet' type='text/css' href='css/ver2.css' />
 <meta name='description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
<meta property="og:title" content="Hỏi Ngay Online">
<meta property="og:description" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">
<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
<meta name="twitter:card" content="summary">

<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>

    </head>
	 <body>
	
<div class="menu group">
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



<div class="content">
  <!--<h1>Hỏi Ngay Online</h1>-->
<div class="menu group">
  <ul>
  <li><a href="/">Trang chủ</a></li>
<li><a href="/ai-bots.rambox">Hội đồng đánh giá</a></li>   
    <li><a href="/dat-cau-hoi">Đặt câu hỏi</a></li>	

  </ul>
</div>
 <div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>

		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành! <br/>';
		 //  echo 'Th, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
		   #xem thong bao
		   $noft= '<div class="container">
	<div class="rectangle">
		<div class="notification-text">
			<i class="material-icons">News: </i>
			<span>&nbsp;&nbsp;Bạn không có thông báo mới!.</span>
		</div>
	</div>
</div>
';
 $yesnoft= '<div class="container">
	<div class="rectangle">
		<div class="notification-text">
			<i class="material-icons">News: </i>
			<span>&nbsp;&nbsp;Bạn có thông báo mới!</span>
		</div>
	</div>
</div>
';
		   if(isset($_SESSION['username'])){
			 
$data = mysql_real_escape_string($_SESSION['username']);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM thongbao WHERE (user LIKE '%$data%') order by rand() LIMIT 5");
			   //   $capnhatrs="update member set birthday='".$u."' where username='".$data."'";
		
				  $layra2 =mysql_query("select * from member where username='".$data."'");
				  if(mysql_num_rows($layra2)!=0){
					 
					  while($get = mysql_fetch_assoc($layra2)){
				//nay danh cho check ngay sinh
				if ($get['birthday'] == "") {
						   echo '
	  <TABLE  BORDER="1"><td>


';
					 echo '<font color="red">Cập nhật ngày sinh (Dùng phòng khi quên pass và hãy nhớ nó thật kĩ nhá)</font>';
					echo '<form action="/" method="post">
   
        <label>Ngày sinh của bạn:</label> <input type="text" name="sinhnhatcuaban" value="'.$get['birthday'].'" size="25" /><br />
       <input type="submit" name="updatedate" value="Lưu ngày sinh" />
   
</form>';
		echo '</TD>
	</TABLE>';
				}
//echo "<font color='red'>".$get['birthday']."</font> ";

//echo "<font color='red'>".$get['username']."</font> ";

		 
				}
				
				///cach ra
		
				  }
				  ////phan lay tin news
		if(mysql_num_rows($query)!=0){
			 // echo 'Bạn nhận được 5 trả lời từ bài viết (Nhấn F5 xem thông báo mới):</br>';
			 echo $yesnoft;
			 echo 'Bạn có trả lời mới từ bài viết <p>';
			while($row = mysql_fetch_assoc($query)){
				//
				
echo "<a href='/view?id=".$row['date']."&messger=yes'><font color='red'>".$row['date']."</font> </a>";

		 
				}
		}
		else
		{
echo $noft;		
}
}
else
{
echo $noft;	
}
}
else
{
echo $noft;	
}
		   #het thong bao 
       }
       else{

       }
       ?></h3>
	   
	   <?php
	   if(isset($_POST["updatedate"])) {
		   $date = $_POST['sinhnhatcuaban'];
		      $capnhatrs=mysql_query("update member set birthday='".$date."' where username='".$data."'");
		
			//	echo 'Complete!';
				    echo "<meta http-equiv='refresh' content='0;/'> ";

				///xong phan kiem tra button
	   }
	   
	   ?>

  <?php #include("ads2.php"); ?> 

  
	<div class="quangcao" id="quangcao"><form class="form-wrapper cf" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
	  <button type="submit">Tìm kiếm</button>
</form></div>

	


<!--<form class="form-wrapper cf" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
<input class="searchsubmit" type="submit" value="Tìm kiếm" />
</form>-->



<?php


	echo "<table class='table'>
  <tr>

<th class='table__heading'>Bài viết mới</th> </tr>
 ";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  //
$cauhoi = convert_vi_to_en(stripslashes($data['cauhoi']));
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	//$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$data['id'].'.html</loc>'."$n";
//
  //echo " <tr class='table__row'> <td class='table__content' data-heading='Bài viết mới' ><b><a 
echo " <tr class='table__row'> <td class='table__content' ><b><a href='/".$gcauhoi."/".$data['id'].".html'>".stripslashes($data['cauhoi'])."</a></b></td> </tr>"; 



}


?>
  



  

</div>

<?php 

 if (isset($_SESSION['username']) && $_SESSION['username']){
	 
?>

<table class='table'>
  <tr>
  	  <?php

     //  if (isset($_SESSION['username']) && $_SESSION['username']){
		  

//echo "<TR><TD><h2> <a href='/add'>Đặ câu hỏi mới - Chủ đề mới</a></h2></TR></TD>";
 echo "<TR><TD>	<h1>  <center> Bài viết mới</td></h1></TR></TD>";
    //   }
      // else{

    //  }
       ?>
		 </TABLE>
<div class="wrapper">
    <div id="results"><!-- results appear here --></div>
    <div class="loading-info"><center><img src="ajax-loader.gif" /></center></div>
</div>



<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
var track_page = 1; //track user scroll as page number, right now page number is 1
var loading  = false; //prevents multiple loads

load_contents(track_page); //initial content load

$(window).scroll(function() { //detect page scroll
	if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled to bottom of the page
		track_page++; //page number increment
		load_contents(track_page); //load content	
	}
});		
//Ajax load function
function load_contents(track_page){
    if(loading == false){
		loading = true;  //set loading flag on
		$('.loading-info').show(); //show loading animation 
		$.post( 'pageld2.php', {'page': track_page}, function(data){
			loading = false; //set loading flag off once the content is loaded
			if(data.trim().length == 0){
				//notify user if nothing to load
				$('.loading-info').html("<center><h3>Bạn đã xem hết bài viết!</h3></center>");
				return;
			}
			$('.loading-info').hide(); //hide loading animation once data is received
			$("#results").append(data); //append data into #results element
		
		}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
			alert(thrownError); //alert with HTTP error
		})
	}
}

</script>
 <TABLE  BORDER="1"><td>
<?php 
 } else {
	 
	 #echo "<TR><TD><center> <font color='red'><h4>Đăng nhập để nhìn thấy tính năng mới!</h4></font></center></td></TR></TD>";

	#include("thongke2.php"); 
	?>
	
<?php


include 'bbcode.php';
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
	echo "<table class='table'>
  <tr>

 ";
$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  //
  $xemcaida = stripslashes($data['noidung']);
$audio = str_replace("<br />", "", $xemcaida);
#bat dau so sanh
$string = strip_tags($audio);
 
 
if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 200);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}
 $html_code	= bbcode::tohtml($string,TRUE);
$cauhoi = convert_vi_to_en($data['cauhoi']);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);
echo "<table class='table'>
  <tr>

<th class='table__heading'>Chủ đề bởi <b>".$data['user']."</b></h2></th> </tr><tr class='table__row'> <td class='table__content' data-heading='News'>";
 echo "<h3 style='text-align: left;'><b>Ngày giờ gửi:</b> <font color='00000'>".$data['date']."</font></h3><p>"; 
  echo "<h3 style='text-align: left;'><b>Câu hỏi:</b> <font color='00000'>".stripslashes($data['cauhoi'])."</font></h3><p>"; 
   $string = "<h3 style='text-align: left;'><b>Nội dung:</b> <br/><br/><font color='00000'>".$html_code."</font></h3>"; 
   echo $string;

  echo "<font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>Xem thêm : ".stripslashes($data['cauhoi'])."</a></h4></b></td> </tr> </TABLE>";


}


?>
  
	<?php
	
 }

?>
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


 <?php include("ads1.php"); ?>

<TABLE BORDER="1"><td>
<center> <h3>Sau 7 ngày, những thông báo trả lời sẽ tự xoá đi để dọn máy chủ. </h3></center></td>
</TABLE>

<?php include 'footer2.php'; ?>
</div>
	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->
