<?php
  include_once('__autoload.php');
  if (isset($_POST['maSPX'])) {
    $maSPX =  $_POST['maSPX'];
    $xoaSP = new sanpham();
    try {
    $success = $xoaSP->xoaSanPham($maSPX);
    if(!$success) {
        $error = "Chua the xoa san pham";
            throw new Exception($error);
        }
    echo "Xao thanh cong";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
  }
?>
