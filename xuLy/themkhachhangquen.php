<?php
  include_once('__autoload.php');
  if (isset($_POST['ten'])) {
      $ten = $_POST['ten'];
      $diaChi = $_POST['diaChi'];
      $soDT = $_POST['soDT'];
      $email = $_POST['email'];
      $add = new khachhangquen();
      $add->themKhachHangQuen($ten,$diaChi,$soDT,$email);
  }
?>
