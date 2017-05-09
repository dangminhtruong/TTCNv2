<?php
  include_once('__autoload.php');
  if (isset($_POST['tenNV'])) {
    $tam1 = $_POST['tenDangNhap'];
    $tam2 = $_POST['matKhau'];
    $tam3 = $_POST['loaiTaiKhoan'];
    $tam4 = $_POST['tenNV'];
    $tam5 = $_POST['diaChi'];
    $tam6 = $_POST['ghiChu'];
    $tam7 = $_POST['soDTND'];
    $themNV = new user();
    $themNV->themNguoiDung($tam1,$tam2,$tam3,$tam4,$tam5,$tam6,$tam7);
    echo "Them nguoi dung thanh cong";
  }
  else {
    echo "Them nguoi dung khong thanh cong";
  }
?>
