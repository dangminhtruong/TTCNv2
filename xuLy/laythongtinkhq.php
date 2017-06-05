<?php
  include_once('__autoload.php');
  if (isset($_POST['idkq'])) {
      $id = $_POST['idkq'];
      $layTT = new khachhangquen();
      $layTT->layThongTinKhachQuen($id);
  }
?>
