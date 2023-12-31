<?php
session_start();
  if (isset($_SESSION['username']) && $_SESSION['username']){
	  include("index.php");
  } else {
	    include("homes.php");
  }
?>