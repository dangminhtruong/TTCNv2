<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  if (isset($_POST['userName'],$_POST['passWord'])) {
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $kiemTraDangNhap = new user();
    $nhanVienDN = $kiemTraDangNhap->checkLogin($userName,$passWord);
    if ($nhanVienDN != 'unvalid') {
      $sql = "SELECT taikhoan.loaiTK FROM nhanvien INNER JOIN taikhoan ON (nhanvien.maTK = taikhoan.maTK)
      WHERE nhanvien.maNV='$nhanVienDN'";
      $layLoaiTaiKhoan = new user();
      $layLoaiTaiKhoan->myQuery($sql);
      $loaiTaiKhoan = $layLoaiTaiKhoan->fetchData();
      $_SESSION['loaiTK'] = $loaiTaiKhoan['loaiTK'];
      $_SESSION['userName'] = $_POST['userName'];
      $_SESSION['passWord'] = $_POST['passWord'];
      $_SESSION['nhanVien'] = $nhanVienDN;
      echo $_SESSION['nhanVien'];
    }
    elseif ($nhanVienDN == 'unvalid') {
      echo "Dang nhap khong thanh cong";
    }
  }
?>
