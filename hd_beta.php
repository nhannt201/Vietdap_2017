<?php
if (file_exists("laivt_firewall.php"))
    include_once "laivt_firewall.php";  
//Khai báo sử dụng session
session_start();
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
<title>Hội Đồng HNO - AI BOT</title>
<link rel="icon" type="image/png" href="/images/ico.ico"/>
<link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />
<link rel='stylesheet' type='text/css' href='css/ver2.css' />
 <meta name='description' content='Hỏi Ngay Online - Hội đồng quản trị - Hội đồng đánh giá - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
<meta property="og:title" content="Hỏi Ngay Online - Hội đồng quản trị - Hội đồng đánh giá ">
<meta property="og:description" content="Hỏi Ngay Online - Hội đồng quản trị - Hội đồng đánh giá - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">
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
 <h1>HỘI ĐỒNG ĐÁNH GIÁ</h1>
 <div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>

<table border="1">

<tbody><tr><td>

		<div style="text-align: center;"><form action="" method="POST" >
 <input type="text" name="data">
  <input type="submit" value="Kiểm tra" name="dangnhap" id="submit">
</form></div>
	</td>

<tr><td>
<?php


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
				echo "Có ".$ab." Bots tham gia phân tích <p>Đánh giá từ các Bot<p>Tốt: ".($kq1 * 1)." | Xấu: ".($kq2 * 1)."<p>";
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
		
		
		?></td></tr>
</tr></tbody></table>



		
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
<style class="cp-pen-styles">

    .form {
        background:rgba(19, 35, 47, 0.9);
        padding:40px;
        max-width:600px;
        margin:40px auto;
        border-radius:4px;
        box-shadow:0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }
	body {
		background-color: white;
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
      
        height:100%;
        padding:5px 10px;
        background:none;
        background-image:none;
        border:1px solid #a0b3b0;
        color:#000;
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
        background:#36c3ff;
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
