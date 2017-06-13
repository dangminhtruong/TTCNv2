<?php
  session_start();
  ob_start();
  include_once("__autoload.php");
  if (isset($_SESSION['nhanVien'],$_POST['matKC'],$_POST['matKM'])) {
    $maNV =  $_SESSION['nhanVien'];
    $matKC = $_POST['matKC'];
    $matKM = $_POST['matKM'];
    $doiMK = new user();
    echo $doiMK->doiMatKhau($maNV,$matKC,$matKM);
  }
  else {
    echo "Da xay ra loi";
  }
?>
