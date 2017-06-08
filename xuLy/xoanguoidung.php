<?php
  include_once('__autoload.php');
  if (isset($_POST['maTK'])) {
    $maTK = $_POST['maTK'];
    $xoaUser = new user();
    try {
    $success = $xoaUser->xoaNguoiDung($maTK);

    if(!$success) {
        $error = "You cannot delete this user";
            throw new Exception($error);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
  }
?>
