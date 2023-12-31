
<?php
#bai viet moi



include("ketnoi.php");
include 'bbcode.php';
$kq=mysql_query("select * from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$xemcaida = $row['noidung'];
$audio = str_replace("<br />", "", $xemcaida);
#bat dau so sanh
$string = strip_tags($audio);
if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 200);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}
#het so sanh 
$html_code	= bbcode::tohtml($string,TRUE);
//$audio = str_replace("[img]", "<img src='", $xemcaida);
//$noidung2 = str_replace("[/img]", "' width='560' height='315'/>", $audio);
//$audio2 = str_replace("[youtube]", "<iframe width='300'src='", $noidung2);
//$noidung = str_replace("[/youtube]", "' frameborder='0' allowfullscreen></iframe>", $audio2);
 if ($_SESSION['username'] == $row['user']){
$quyenedit = $row['user']."";
$thanhviendang = $row['user'];
 } else {
	$quyenedit = $row['user']; 
	$thanhviendang = $row['user'];
 }
	echo "<TABLE  BORDER='1'><td><TR><TD COLSPAN='2'>

<h2>Câu hỏi bởi <b>".$quyenedit."</b></h2></TD></TR>";
 echo "<TR><TD><h3 style='text-align: left;'><b>Ngày giờ gửi:</b> <font color='00000'>".$row['date']."</font></h3><p>"; 
  echo "<h3 style='text-align: left;'><b>Câu hỏi:</b> <font color='00000'>".$row['cauhoi']."</font></h3><p>"; 
   $string = "<h3 style='text-align: left;'><b>Nội dung:</b> <br/><br/><font color='00000'>".$html_code."</font></h3></TD></TR>"; 
echo make_clickable($string);
 //
 
$cauhoi = convert_vi_to_en($row['cauhoi']);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	//$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$data['id'].'.html</loc>'."$n";
//
  echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$row['id'].".html'>Xem thêm : ".$row['cauhoi']."</a></h4></b></TD></TR> </TABLE>
"; 

}


?>