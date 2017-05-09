<?php
  include_once('__autoload.php');
  if (isset($_POST['maTKEdit'])) {
    $maTK = $_POST['maTKEdit'];
    $getUser = new user();
    $getUser->layThongTinNguoiDung($maTK);
  }
?>
