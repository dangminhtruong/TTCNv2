<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  if (isset($_POST['btnSuaSP'])) {
    $idSanPham = $_POST['idSanPham'];
    //---------------------------------------------
    if ($_POST['loaiSanPham'] != '') {
      $tam = $_POST['loaiSanPham'];
      $sql = " UPDATE sanpham SET loaiSanPham = '$tam' WHERE maSanPham = '$idSanPham' ";
      $themSP = new sanpham();
      $themSP->myQuery($sql);
      $themSP->freeQuery();
      header('location:http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham');
      $_SESSION['chinhsuathanhcong'] = 'thanhcong';
    }
    //-----------------------------------------------
    if ($_POST['tenSanPham'] != '') {
      $tam = $_POST['tenSanPham'];
      $sql = " UPDATE sanpham SET tenSanPham = '$tam' WHERE maSanPham = '$idSanPham' ";
      $themSP = new sanpham();
      $themSP->myQuery($sql);
      $themSP->freeQuery();
      header('location:http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham');
      $_SESSION['chinhsuathanhcong'] = 'thanhcong';
    }
    //----------------------------------------------
    if ($_POST['giaSanPham'] != '') {
      $tam = $_POST['giaSanPham'];
      $sql = " UPDATE sanpham SET giaSanPham = '$tam' WHERE maSanPham = '$idSanPham' ";
      $themSP = new sanpham();
      $themSP->myQuery($sql);
      $themSP->freeQuery();
      header('location:http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham');
      $_SESSION['chinhsuathanhcong'] = 'thanhcong';
    }
    //-----------------------------------------------
    if ($_POST['soLuongSanPham'] != '') {
      $tam = $_POST['soLuongSanPham'];
      $sql = " UPDATE sanpham SET soLuongSanPham = '$tam' WHERE maSanPham = '$idSanPham' ";
      $themSP = new sanpham();
      $themSP->myQuery($sql);
      $themSP->freeQuery();
      header('location:http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham');
      $_SESSION['chinhsuathanhcong'] = 'thanhcong';
    }
    //------------------------------------------------
    if ($_POST['moTaSanPham'] != '') {
      $tam = $_POST['moTaSanPham'];
      $sql = " UPDATE sanpham SET moTaSanPham = '$tam' WHERE maSanPham = '$idSanPham' ";
      $themSP = new sanpham();
      $themSP->myQuery($sql);
      $themSP->freeQuery();
      header('location:http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham');
      $_SESSION['chinhsuathanhcong'] = 'thanhcong';
    }
    //-----------------------------------------------------
    if ($_FILES["imageUploadEdit"]["size"] > 0){
        $file_path = $_FILES["imageUploadEdit"]["tmp_name"];
        $file_name = $_FILES["imageUploadEdit"]["name"];
        $file_type = $_FILES["imageUploadEdit"]["type"];
        $file_size = $_FILES["imageUploadEdit"]["size"];
        $file_errow = $_FILES["imageUploadEdit"]["error"];

        $new_path = "../images/".$file_name;
        move_uploaded_file ($file_path,$new_path);
        $tenAnh = $file_name ;

        $sql = "UPDATE sanpham SET anhsanPham = '$tenAnh' WHERE maSanPham = '$idSanPham' ";
        $themSP = new sanpham();
        $themSP->myQuery($sql);
        header('location:http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham');
        $_SESSION['chinhsuathanhcong'] = 'thanhcong';
      }
  }
?>