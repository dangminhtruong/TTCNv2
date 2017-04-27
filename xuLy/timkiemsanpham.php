<?php
  include_once('__autoload.php');
  if (isset($_POST['tenSPCS'])) {
    $tam = $_POST['tenSPCS'];
    $timKiem = new sanpham();
    $timKiem->timKiemSanPham($tam);
  }
?>
