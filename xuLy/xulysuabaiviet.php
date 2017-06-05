<?php
  include_once('__autoload.php');
  if (isset($_POST['idBv'])){
    $idbv = $_POST['idBv'];
    $sql = "SELECT noiDung FROM baiviet WHERE id = '$idbv'";
    $bv = new sanpham();
    $bv->myQuery($sql);
    $noiDungbv = $bv->fetchData();
    echo $noiDungbv['noiDung'];
  }
  if (isset($_POST['idUpDate'])) {
    $id = $_POST['idUpDate'];
    $upDateTieuDe = $_POST['upDateTieuDe'];
    $upDateNoiDung = $_POST['upDateNoiDung'];
    $upDate = new sanpham();
    $sql2 = "UPDATE baiviet SET tieuDe = '$upDateTieuDe', noiDung = '$upDateNoiDung' WHERE id = '$id'";
    $upDate->myQuery($sql2);
    echo "Sua bai viet thanh cong";
  }
?>
