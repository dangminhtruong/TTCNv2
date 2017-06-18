<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  if(isset($_POST['btnThemSanPham'])) {
        $maLoaiSP = $_POST['loaiSanPham'];
        $tenSP = $_POST['tenSanPham'];
        $giaSP = $_POST['giaSanPham'];
        $soLuongSP = $_POST['soLuongSanPham'];
        $moTaSP = $_POST['moTaSanPham'];

        $file_path = $_FILES["imageUpload"]["tmp_name"];
        $file_name = $_FILES["imageUpload"]["name"];
        $file_type = $_FILES["imageUpload"]["type"];
        $file_size = $_FILES["imageUpload"]["size"];
        $file_errow = $_FILES["imageUpload"]["error"];
        $new_path = "../images/".$file_name;
        move_uploaded_file ($file_path,$new_path);
        $anhSP = $file_name ;
        $themSP = new sanpham();
      if ($themSP->themSanPham($tenSP,$soLuongSP,$giaSP,$maLoaiSP,$moTaSP,$anhSP) == 'Them san pham thanh cong') {
        header("location:../hienthi/quantri.php?page=themsanpham");
        $_SESSION['themSPThanhCong'] = 'success';
      }
      else {
          header("location:../hienthi/quantri.php?page=themsanpham");
        $_SESSION['themSPKhongThanhCong'] = 'no success';
      }
  }
?>
