<?php
include("config.inc.php"); //include config file
include 'bbcode.php';
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
    header('HTTP/1.1 500 Invalid page number!');
    exit();
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);

//fetch records using page position and item per page. 
$results = $mysqli->prepare("SELECT id, user, cauhoi, noidung, date FROM data ORDER BY id DESC LIMIT ?, ?");

//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
//for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
$results->bind_param("dd", $position, $item_per_page); 
$results->execute(); //Execute prepared Query
$results->bind_result($id, $user, $cauhoi, $noidung, $date); //bind variables to prepared statement

//output results from database
while($results->fetch()){ //fetch values
  //  echo '<li>'.$id.') <strong>'.$user.'</strong> : '.$cauhoi.'</li>'; 
  
$xemcaida = $noidung;
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
 if ($_SESSION['username'] == $user){
$quyenedit = $user."";
$thanhviendang = $user;
 } else {
	$quyenedit = $user; 
	$thanhviendang = $user;
 }
	echo "<TABLE  BORDER='1'><td><TR><TD COLSPAN='2'>

<h2>Câu hỏi bởi <b>".$quyenedit."</b></h2></TD></TR>";
 echo "<TR><TD><h3 style='text-align: left;'><b>Ngày giờ gửi:</b> <font color='00000'>".$date."</font></h3><p>"; 
  echo "<h3 style='text-align: left;'><b>Câu hỏi:</b> <font color='00000'>".$cauhoi."</font></h3><p>"; 
   $string = "<h3 style='text-align: left;'><b>Nội dung:</b> <br/><br/><font color='00000'>".$html_code."</font></h3></TD></TR>"; 
echo make_clickable($string);
 //
 
$cauhoi2 = convert_vi_to_en($cauhoi);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi2);  
	//$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$data['id'].'.html</loc>'."$n";
//
  echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$id.".html'>Xem thêm : ".$cauhoi."</a></h4></b></TD></TR> </TABLE>
"; 

}
  #phan quan tromh

/////////////


function _make_url_clickable_cb($matches) {
    $ret = '';
    $url = $matches[2];
    if ( empty($url) )
        return $matches[0];
    // removed trailing [.,;:] from URL
    if ( in_array(substr($url, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($url, -1);
        $url = substr($url, 0, strlen($url)-1);
    }
    return $matches[1] . "<a href=\"$url\" rel=\"nofollow\">$url</a>" . $ret;
}
function _make_web_ftp_clickable_cb($matches) {
    $ret = '';
    $dest = $matches[2];
    $dest = 'http://' . $dest;
    if ( empty($dest) )
        return $matches[0];
    // removed trailing [,;:] from URL
    if ( in_array(substr($dest, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($dest, -1);
        $dest = substr($dest, 0, strlen($dest)-1);
    }
    return $matches[1] . "<a href=\"$dest\" rel=\"nofollow\">$dest</a>" . $ret;
}
function _make_email_clickable_cb($matches) {
    $email = $matches[2] . '@' . $matches[3];
    return $matches[1] . "<a href=\"mailto:$email\">$email</a>";
}
function make_clickable($ret) {
    $ret = ' ' . $ret;
    // in testing, using arrays here was found to be faster
    $ret = preg_replace_callback('#([\s>])([\w]+?://[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_url_clickable_cb', $ret);
    $ret = preg_replace_callback('#([\s>])((www|ftp)\.[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_web_ftp_clickable_cb', $ret);
    $ret = preg_replace_callback('#([\s>])([.0-9a-z_+-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,})#i', '_make_email_clickable_cb', $ret);
    // this one is not in an array because we need it to run last, for cleanup of accidental links within links
    $ret = preg_replace("#(<a( [^>]+?>|>))<a [^>]+?>([^>]+?)</a></a>#i", "$1$3</a>", $ret);
    $ret = trim($ret);
    return $ret;
}
function convert_vi_to_en($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        return $str;
    }