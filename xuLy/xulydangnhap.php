<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  if (isset($_POST['userName'],$_POST['passWord'])) {
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $kiemTraDangNhap = new user();
    if ($kiemTraDangNhap->checkLogin($userName,$passWord) == 'valid') {
      $_SESSION['userName'] = $_POST['userName'];
      $_SESSION['passWord'] = $_POST['passWord'];
      echo "Dang nhap thanh cong";
    }
    elseif ($kiemTraDangNhap->checkLogin($userName,$passWord) == 'unvalid') {
      echo "Dang nhap khong thanh cong";
    }
  }
?>
