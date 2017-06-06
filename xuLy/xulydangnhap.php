<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  if (isset($_POST['userName'],$_POST['passWord'])) {
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $kiemTraDangNhap = new user();
    $nhanVienDN = $kiemTraDangNhap->checkLogin($userName,$passWord);
    if ($nhanVienDN != 'unvalid') {
      $_SESSION['userName'] = $_POST['userName'];
      $_SESSION['passWord'] = $_POST['passWord'];
      $_SESSION['nhanVien'] = $nhanVienDN;
      echo $_SESSION['nhanVien'];
    //  echo "Dang nhap thanh cong";
    }
    elseif ($nhanVienDN == 'unvalid') {
      echo "Dang nhap khong thanh cong";
    }
  }
?>
