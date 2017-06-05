<?php
	session_start();
	ob_start();
	if (isset($_SESSION['userName'],$_SESSION['passWord'])){
		session_destroy();
		header('location:/TTCNv2/hienThi/dangnhap.php');
	}
	else{
		header('location:/TTCNv2/hienThi/dangnhap.php');
  }
?>
