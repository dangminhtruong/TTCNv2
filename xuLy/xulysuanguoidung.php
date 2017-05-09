<?php
  include_once('__autoload.php');
  if (isset($_POST['editMaNV'])) {
    $maTK = $_POST['editMaNV'];
    //-------------------------------
    if ($_POST['editTenTK'] != '') {
      $tenTKMoi = $_POST['editTenTK'];
      $sql = "UPDATE taikhoan SET tenTK = '$tenTKMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    //-------------------------------
    if ($_POST['editMatKhau'] != '') {
      $matKhauMoi = $_POST['editMatKhau'];
      $sql = "UPDATE taikhoan SET matKhau = '$matKhauMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    //-------------------------------
    if ($_POST['editLoaiTK'] != '') {
      $loaiTkMoi = $_POST['editLoaiTK'];
      $sql = "UPDATE taikhoan SET loaiTK = '$loaiTkMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    //---------------------------------
    if ($_POST['editTenNV'] != '') {
      $hoTenNvMoi = $_POST['editTenNV'];
      $sql = "UPDATE nhanvien SET hoTenNV = '$hoTenNvMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    if ($_POST['editDiaChiNV'] != '') {
      $diaChiNvMoi = $_POST['editDiaChiNV'];
      $sql = "UPDATE nhanvien SET diaChiNV = '$diaChiNvMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    if ($_POST['editDienThoaiNV'] != '') {
      $soDienThoaiNvMoi = $_POST['editDienThoaiNV'];
      $sql = "UPDATE nhanvien SET soDienThoaiNV = '$soDienThoaiNvMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    if ($_POST['editGhiChuTK'] != '') {
      $ghiChunvMoi = $_POST['editGhiChuTK'];
      $sql = "UPDATE nhanvien SET ghiChuNV = '$ghiChunvMoi' WHERE maTK = '$maTK' ";
      $suaNV = new user();
      $suaNV->myQuery($sql);
    }
    echo "Da cap nhat";
  }
  else {
    echo "Cap nhat chua thanh cong";
  }
?>
