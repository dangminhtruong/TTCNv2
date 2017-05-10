<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  if (isset($_POST['maSP'])) {
    $maSP = $_POST['maSP'];
    $_SESSION['soSanPhamMua'] = $_POST['sanPhamDaChon'] + 1;
    $sql0 = "SELECT* FROM giohang WHERE maSanPham = '$maSP' ";
    $tam = new sanpham();
    $tam->myQuery($sql0);
    if ($tam->numRows() == 0) {
      $sql1 = "SELECT sanpham.giaSP FROM sanpham  WHERE maSP = '$maSP'";
      $tam->myQuery($sql1);
      $donGia = $tam->fetchData($sql1);
      $tongTien = $donGia['giaSP'];
      $sql2 = "INSERT INTO giohang(maSanPham,soLuong,tongTien)  VALUES('$maSP',1,$tongTien)";
      $tam->myQuery($sql2);
      echo $_SESSION['soSanPhamMua'];
    }
    else {
      $sql3 ="SELECT giohang.soLuong FROM giohang WHERE maSanPham = '$maSP'";
      $tam->myQuery($sql3);
      $rows = $tam->fetchData();
      $themSL = $rows['soLuong'] + 1;
      //-----------
      $sql4 = "SELECT sanpham.giaSP FROM sanpham  WHERE maSP = '$maSP'";
      $tam->myQuery($sql4);
      $donGia = $tam->fetchData($sql4);
      $tongTien = $donGia['giaSP']* $themSL;
      //-----------
      $sql5 = "UPDATE giohang SET soLuong = '$themSL', tongTien = '$tongTien' WHERE maSanPham = '$maSP'";
      $tam->myQuery($sql5);
      echo $_SESSION['soSanPhamMua'];
    }
  }
?>
