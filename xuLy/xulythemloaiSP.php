<?php
  include_once('__autoload.php');
  if (isset($_POST['tenloaiSPM'], $_POST['moTaLoaiSPM'])) {
    $tenLSPM = $_POST['tenloaiSPM'];
    $moTaLoaiSP = $_POST['moTaLoaiSPM'];
    $addLSP = new loaisanpham();
    $addLSP->themLoaiSanPham($tenLSPM,$moTaLoaiSP);
  }
?>
