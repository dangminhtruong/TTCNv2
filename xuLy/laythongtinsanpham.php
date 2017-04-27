<?php
  include_once('__autoload.php');
  if (isset($_POST['maSPS'])) {
    $maSPS = $_POST['maSPS'];
    $xyLyMaSPS = new sanpham();
    $xyLyMaSPS->layThongTinTheoId($maSPS);
  }
?>
