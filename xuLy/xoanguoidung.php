<?php
  include_once('__autoload.php');
  if (isset($_POST['maTK'])) {
    $maTK = $_POST['maTK'];
    $xoaUser = new user();
    $xoaUser->xoaNguoiDung($maTK);
    $xoaUser->disconnectDb();
    echo "Xoa thanh cong";
  }
?>
