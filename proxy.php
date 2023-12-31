<?php


if (isset($_GET['url'])) {
	$url = $_GET['url'];


//
$scanmadoc = 'khoi.html';
$pos = strpos($url, $scanmadoc);
if ($pos === false) {
	$lockitu2 = str_replace("%27","",$url);
	$lockitu = str_replace("'","",$lockitu2);

   		header('Location: '.$lockitu);
	//	echo $url;
exit;
} else {
 echo '<html lang="vi">
<head>
       <meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">﻿
<title>Cảnh báo URL!</title></head><body><font size="5px"><center>URL bạn truy cập có thể là không an toàn. Vui lòng không truy cập trang này!</center></font></body></html>';
}
///
	} elseif (isset($_GET['url']) == " ") { 
	header('Location: /');
exit; 
	}
	 else {
		header('Location: /');
exit; 
	 }
function base64url_encode($data, $pad = null) {
    $data = str_replace(array('+', '/'), array('-', '_'), base64_encode($data));
    if (!$pad) {
        $data = rtrim($data, '=');
    }
    return $data;
}
function base64url_decode($data) {
    return base64_decode(str_replace(array('-', '_'), array('+', '/'), $data));
}
?>