<html lang="vi">
<head>
<title>Hội đồng đánh giá từ ngữ</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
</head>
<h1>Hội đồng đánh giá từ ngữ </h1><p>
<h2>Dữ liệu từ nội dung của hội đồng kể cả thành viên</h2><p>
Dữ liệu sẽ được thay đổi tự động khi mỗi lần thanh viên hay khách và các BQT đưa ra chủ đề mới từ bên trong cộng đồng.<p>
(Ví dụ: tình yêu -> sẽ cho ra kết quả đánh giá dựa vào dữ liệu của cộng đồng và thành viên)

<form action="" method="POST">
 <input type="text" name="data"><p>
  <input type="submit" value="CHECK">
</form>
<?php

include('allinones.php');
include("ketnoi.php");
if (isset($_POST['data']) ) {

$data = mysql_real_escape_string(strtolower($_POST['data']));
$a1 = 0;
			$a2 = 0;
			$kq1 = 0;
			$b1 = 0;
			$b2 = 0;
                        $kq2 = 0;
                        $ab = 0;
		$query = mysql_query("SELECT * FROM data WHERE (noidung LIKE '%$data%')");
		if(mysql_num_rows($query)!=0){

				
			while($row = mysql_fetch_assoc($query)){
			$hoidong1 = 2;
			$hoidong2 = 1;
			$preview_data = strtolower($row['noidung']);
			//similar_text("tình yêu dối trá",$row['noidung'],$_POST['data'],$percent);
                        //echo $percent;
			//echo 'a';
			
			$wt1 = (similarity($data,$preview_data) * 100) ;
 if ($wt1 >= $hoidong1) { 
 $ab = $ab + 1;
 $a1 = $a1 + 1;
 $a2 = $a2 + $wt1;
 } 
  if ($wt1 <= $hoidong2) { 
 $ab = $ab + 1;
 $b1 = $b1 + 1;
 $b2 = $b2 + $wt1;
 }
				}
				$kq1 = round($a2, 2); // $kq1 = round($a2/$a1, 2);
				$kq2 = round($b2, 2);
			
				
				////
				if ($kq1 == 0 and $kq2 == 0) {
				echo 'Hội đồng đang phân vâng với kết quả này!<p>';
				} else {
				echo "Có ".$ab." Thành viên tham gia phân tích <p>Đánh giá từ các TV <p>Tốt: ".($kq1 * 1)." | Xấu: ".($kq2 * 1)."<p>";
				}
				if ($kq1 > $kq2  ) {
				echo "Theo đánh giá thì từ '".($data)."' là tốt - Tuyệt vời và sử dụng phổ biến khá rộng rãi trên Công đồng hỏi ngay online ";

				} elseif ($kq1 == 0 and $kq2 == 0) {
				echo "Theo đánh giá thì '".($data)."' là từ & cụm từ <b>căn bằng, tương đối</b> trên Cộng Đồng (Nghĩ Tốt cũng không đúng mà Xấu cũng sai)";
				} else {
								echo "Theo đánh giá thì từ '".($data)."' là <b>xấu - không tốt</b> và sử dụng không rộng rãi trên Công đồng hỏi ngay online chỉ với <b>số lượng phân bố nhỏ</b> trong nội dung.";

				}
	echo "<br><b>Lưu ý: Nội dung lấy từ tư liệu của hội đồng và thành viên, chỉ mang tính chất THAM KHẢO!</b>";

				
				///
				
		} else {
				echo "Hội đồng không có câu trả lời!";
}
		
		}
		
		
		?>
		
		<?php
		function similarity($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    
    $max = max($len1, $len2);
    $similarity = $i = $j = 0;
    
    while (($i < $len1) && isset($str2[$j])) {
        if ($str1[$i] == $str2[$j]) {
            $similarity++;
            $i++;
            $j++;
        } elseif ($len1 < $len2) {
            $len1++;
            $j++;
        } elseif ($len1 > $len2) {
            $i++;
            $len1--;
        } else {
            $i++;
            $j++;
        }
    }

    return round($similarity / $max, 2);
}


?>
</html>