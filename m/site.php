<?php echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

?>
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->
<?php


	
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
echo "<url>
";
echo " <loc>";

echo "http://hoingay.online/view?id=".$data['id']; 
echo "</loc>
";
echo "</url>
";


}


?>

<?php


	
include("ketnoi.php");
$kq=mysql_query("SELECT id from member ORDER BY id DESC") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from member where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
echo "<url>
";
echo " <loc>";

echo "http://hoingay.online/user?id=".$data['id']."&u=".$data['username']; 
echo "</loc>
";
echo "</url>
";


}


?>

<?php


	
include("ketnoi.php");
$kq=mysql_query("SELECT id from member ORDER BY id DESC") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from member where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
echo "<url>
";
echo " <loc>";

echo "http://hoingay.online/user?u=".$data['username']; 
echo "</loc>
";
echo "</url>
";


}


?>

 </urlset>