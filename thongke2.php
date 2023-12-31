<TABLE  BORDER="1">

<?php


	echo "<table class='table'>
  <tr>

<th class='table__heading'>Tên thành viên</th> <th class='table__heading'>Tài khoản</th> </tr>

 ";
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





<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bài viết</h2></TD></TR><table class='table'>
  <tr>

<th class='table__heading'>Tên thành viên</th> <th class='table__heading'>Số bài viết</th> </tr>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from vieww ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from vieww where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='red'><h4>".$data['idd']."</h4></font></th><th><h3>".$data['view']." bài</h3></th</TD></TR>"; 


}


?>
</table>
<!--<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bình luận</h2></TD></TR><table class='table'>
  <tr>

<th class='table__heading'>Tên thành viên</th> <th class='table__heading'>Số bình luận</th> </tr>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from topcmm ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from topcmm  where view = $id2 ";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='00CC66'><h4>".$data['user']."</font></h4></th><th><h3>".$data['view']." bình luận</h3></th</TD></TR>"; 


}



?>

</TABLE>-->


<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều chủ đề</h2></TD></TR><table class='table'>
  <tr>

<th class='table__heading'>Tên thành viên</th> <th class='table__heading'>Chủ đề</th> </tr>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from chudee ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from chudee where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='999900'><h4>".$data['user']."</h4></font></th><th><h3>".$data['view']." chủ đề</h3></th</TD></TR>"; 


}


?>

</TABLE>


<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có điểm nhiều nhất</h2></TD></TR> <table class='table'> <tr>

<th class='table__heading'>Tên thành viên</th> <th class='table__heading'>Điểm số</th> </tr>";
include("ketnoi.php");
$kq=mysql_query("SELECT diem from diemso ORDER BY diem DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['diem']);

 $sql = "select * from diemso where diem = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='003366'><h4>".$data['user']."</font></h4></th><th><h3>".$data['diem']." điểm</h3></th</TD></TR>"; 


}


?>

</TABLE>