<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>10 Thành viên mới</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from member ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from member where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><h4><a href='/member/".$data['username']."/".$data['id'].".html'>".$data['fullname']."</h4></th><th><center><a href='/member/".$data['username']."/".$data['id'].".html'>".$data['username']."</h4></th></center></a></TD></TR>"; 


}


?>

</TABLE>


  <TABLE  BORDER="1"><td>
	 <center>  <h2>Đừng để những con số bằng nhau nếu không sẽ chỉ hiện 1 tên tài khoản ưu tú nhất nên hãy thi đấu nhau đừng để cùng con số!</h2></a></center></td>
	 </TABLE>
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bài viết</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from vieww ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from vieww where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='red'><h4>".$data['idd']."</h4></font></th><th><h3>Số bài viết: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bình luận</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from topcmm ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from topcmm  where view = $id2 ";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='00CC66'><h4>".$data['user']."</font></h4></th><th><h3>Số bình luận: ".$data['view']."</h3></th</TD></TR>"; 


}



?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều chủ đề</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from chudee ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from chudee where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='999900'><h4>".$data['user']."</h4></font></th><th><h3>Số chủ đề: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có điểm nhiều nhất</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT diem from diemso ORDER BY diem DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['diem']);

 $sql = "select * from diemso where diem = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='003366'><h4>".$data['user']."</font></h4></th><th><h3>Điểm số: ".$data['diem']."</h3></th</TD></TR>"; 


}


?>

</TABLE>