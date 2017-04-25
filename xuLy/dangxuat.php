<?php
	session_start();
	ob_start();
	if (isset($_SESSION['userName'],$_SESSION['passWord'])){
		session_destroy();
		header('location: http://localhost/TTCNv2/hienThi/dangnhap.php');
	}
	else{
		header('location: http://localhost/TTCNv2/hienThi/dangnhap.php');
  }
?>
