<?php
    include_once('__autoload.php');
    if (isset($_POST['idUpDate'])) {
      $maKHUpdate = $_POST['idUpDate'];
      $upDate = new khachhangquen();
      //---------------------
      if ($_POST['tenUpDate'] != '') {
          $tenUpDate = $_POST['tenUpDate'];
          $sql0 = "UPDATE khachhang SET tenKH = '$tenUpDate' WHERE maKH = '$maKHUpdate'";
          $upDate->myQuery($sql0);
      }
      //---------------------
      if ($_POST['diaChiUpDate'] != '') {
        $diaChiUpDate = $_POST['diaChiUpDate'];
        $sql1 = "UPDATE khachhang SET diaChi = '$diaChiUpDate' WHERE maKH = '$maKHUpdate'";
        $upDate->myQuery($sql1);
      }
      //---------------------
      if ($_POST['soDtUpDate'] != '') {
        $soDtUpDate = $_POST['soDtUpDate'];
        $sql2 = "UPDATE khachhang SET soDT = '$soDtUpDate' WHERE maKH = '$maKHUpdate'";
        $upDate->myQuery($sql2);
      }
      //--------------------
      if ($_POST['emailUpDate'] != '') {
        $emailUpDate = $_POST['emailUpDate'];
        $sql3 = "UPDATE khachhang SET email = '$emailUpDate' WHERE maKH = '$maKHUpdate'";
        $upDate->myQuery($sql3);
      }
      echo "Chinh sua thanh cong";
    }
    else {
      echo "Chinh sua khong thanh cong";
    }
?>
