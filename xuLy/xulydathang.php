<?php
  session_start();
  ob_start();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  include_once('__autoload.php');
  if (isset($_POST['tenKh'])) {
    $tenKH = $_POST['tenKh'];
    $diaChiKh = $_POST['diaChiKh'];
    $soDienThoaiKh = $_POST['soDienThoaiKh'];
    $tongThanhToan = $_POST['tongThanhToan'];
    $ngayDatHang =  date('Y/m/d');
    $ngayG = mktime (0, 0, 0, date("m"), date("d")+3, date("Y"));
    $ngayGiaoHang = date('Y/m/d',$ngayG);
    //----------------------------------------------------

    //--------------THEM KHACH HANG-----------------------
    $themThongTinKh = new sanpham();
    $sql0 = "SELECT* FROM khachhang WHERE tenKH = '$tenKH' AND soDT = '$soDienThoaiKh' ";
    $themThongTinKh->myQuery($sql0);

    if ($themThongTinKh->numRows() > 0) {
      $rows= $themThongTinKh->fetchData();
      $maK = $rows['maKH'];
      $sql1 = "INSERT INTO donhang(maKH,ngayDatHang,ngayGiaoHang,trangThai,tongThanhToan)
      VALUES('$maK','$ngayDatHang','$ngayGiaoHang','Đang chờ','$tongThanhToan')";
      $themDonHang = new sanpham();
      $themDonHang->myQuery($sql1);
      //--------------DANG LAM DO------
      $sql5 = "SELECT Max(donhang.maDH) as donHangCuoi FROM donhang WHERE maKH ='$maK' ";
      $themDonHang->myQuery($sql5);
      $maDHC = $themDonHang->fetchData();
      $maDHT = $maDHC['donHangCuoi'];
      //--------------------
      foreach ($_SESSION['giohang'] as $key => $value) {
        $sql6 = "INSERT INTO chitietdonhang(maDH,maSP,soLuong) VALUES('$maDHT','$key','$value')";
        $themDonHang->myQuery($sql6);
      }
      session_unset($_SESSION['giohang']);
      session_unset($_SESSION['giohang']);
      echo "Dat hang than cong";
    }
    else {
      $sql2 = "INSERT INTO khachhang(tenKH,soDT,diaChi) VALUES('$tenKH','$soDienThoaiKh','$diaChiKh')";
      $themThongTinKh->myQuery($sql2);
      //--------------
      $sql3 = "SELECT khachhang.maKH FROM khachhang WHERE tenKH='$tenKH' AND soDT ='$soDienThoaiKh'";
      $themDH = new sanpham();
      $themDH->myQuery($sql3);
      $maKhMoiThem = $themDH->fetchData();
      $maKh = $maKhMoiThem['maKH'];
      //---------------
      $sql4 = "INSERT INTO donhang(maKH,ngayDatHang,ngayGiaoHang,trangThai,tongThanhToan)
       VALUES('$maKh','$ngayDatHang','$ngayGiaoHang','Đang chờ','$tongThanhToan')";
       $themDH->myQuery($sql4);
       //------------
        $sql8 = "SELECT donhang.maDH FROM donhang WHERE maKH = '$maKh' ";
        $themDH->myQuery($sql8);
        $maDHM = $themDH->fetchData();
        $maDHMoiThem = $maDHM['maDH'];
       //------------
       foreach ($_SESSION['giohang'] as $key => $value) {
         $sql7 = "INSERT INTO chitietdonhang(maDH,maSP,soLuong) VALUES('$maDHMoiThem','$key','$value')";
         $themDH->myQuery($sql7);
       }
       session_unset($_SESSION['giohang']);
       session_unset($_SESSION['giohang']);
       echo "Dat hang than cong";
    }
    //------------------------------------
    //-----------------------------------
  }
?>
