<?php
    include_once('__autoload.php');
    if (isset($_POST['idUpDate'])) {
      $idUpdate = $_POST['idUpDate'];
      $upDate = new khachhangquen();
      //---------------------
      if ($_POST['tenUpDate'] != '') {
          $tenUpDate = $_POST['tenUpDate'];
          $sql0 = "UPDATE khachhangquen SET tenKh = '$tenUpDate' WHERE id = '$idUpdate'";
          $upDate->myQuery($sql0);
      }
      //---------------------
      if ($_POST['diaChiUpDate'] != '') {
        $diaChiUpDate = $_POST['diaChiUpDate'];
        $sql1 = "UPDATE khachhangquen SET diaChi = '$diaChiUpDate' WHERE id = '$idUpdate'";
        $upDate->myQuery($sql1);
      }
      //---------------------
      if ($_POST['soDtUpDate'] != '') {
        $soDtUpDate = $_POST['soDtUpDate'];
        $sql2 = "UPDATE khachhangquen SET soDt = '$soDtUpDate' WHERE id = '$idUpdate'";
        $upDate->myQuery($sql2);
      }
      //--------------------
      if ($_POST['emailUpDate'] != '') {
        $emailUpDate = $_POST['emailUpDate'];
        $sql3 = "UPDATE khachhangquen SET email = '$emailUpDate' WHERE id = '$idUpdate'";
        $upDate->myQuery($sql3);
      }
      echo "Chinh sua thanh cong";
    }
    else {
      echo "Chinh sua khong thanh cong";
    }
?>
