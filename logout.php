<?php
//Khai báo sử dụng session
session_start();
?>
<?php 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // x贸a session email
}
echo "<meta http-equiv='refresh' content='0;/'>";
?>
