<?php
  include_once('__autoload.php');
  if (isset($_POST['maSPX'])) {
    $maSPX =  $_POST['maSPX'];
    $xoaSP = new sanpham();
    $xoaSP->xoaSanPham($maSPX);
    echo "Da xoa san pham";
  }



?>
