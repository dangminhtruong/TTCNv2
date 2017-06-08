<?php
  session_start();
  ob_start();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  include_once('__autoload.php');
  if (isset($_POST['tenKh'])) {
    $tenKH = $_POST['tenKh'];
    $diaChiKh = $_POST['diaChiKh'];
    $soDienThoaiKh = $_POST['soDienThoaiKh'];
    $email = $_POST['email'];
    $cachThanhToan = $_POST['cachThanhToan'];
    $tongThanhToan = $_POST['tongThanhToan'];
    $ngayDatHang =  date('Y/m/d');
    $ngayG = mktime (0, 0, 0, date("m"), date("d")+3, date("Y"));
    $ngayGiaoHang = date('Y/m/d',$ngayG);
    //----------------------------------------------------

    //--------------THEM KHACH HANG-----------------------
    $themThongTinKh = new sanpham();
    $sql0 = "SELECT* FROM khachhang WHERE tenKH = '$tenKH' AND soDT = '$soDienThoaiKh' ";
    $themThongTinKh->myQuery($sql0);
    //----Kiem tra ton tai thong tin khach hang
    if ($themThongTinKh->numRows() > 0) {
      $rows= $themThongTinKh->fetchData();
      $maK = $rows['maKH'];
      $sql1 = "INSERT INTO donhang(maKH,ngayDatHang,ngayGiaoHang,trangThai,tongThanhToan,cachThanhToan)
      VALUES('$maK','$ngayDatHang','$ngayGiaoHang','Đang chờ','$tongThanhToan','$cachThanhToan')";
      $themDonHang = new sanpham();
      $themDonHang->myQuery($sql1);
      //--------------------
      $sql5 = "SELECT Max(donhang.maDH) as donHangCuoi FROM donhang WHERE maKH ='$maK' ";
      $themDonHang->myQuery($sql5);
      $maDHC = $themDonHang->fetchData();
      $maDHT = $maDHC['donHangCuoi'];
      //--------------------
      foreach ($_SESSION['giohang'] as $key => $value) {
        $sql6 = "INSERT INTO chitietdonhang(maDH,maSP,soLuong) VALUES('$maDHT','$key','$value')";
        $themDonHang->myQuery($sql6);
      }
      //--------------------
      foreach ($_SESSION['giohang'] as $key => $value) {
        $sql9 = "UPDATE sanpham SET sanpham.soLuongDaBan = sanpham.soLuongDaBan + '$value',
        sanpham.soLuongSP = sanpham.soLuongSP - '$value' WHERE maSP = '$key' ";
        $themDonHang->myQuery($sql9);
      }
      //-------------------
        $sql12 = "SELECT  sanpham.tensp, sanpham.giasp, chitietdonhang.soLuong FROM chitietdonhang INNER JOIN sanpham
        ON (chitietdonhang.masp = sanpham.masp) WHERE chitietdonhang.madh = '$maDHT'";
        $themDonHang->myQuery($sql12);
        while ($thongTinSp = $themDonHang->fetchData()) {
          $dongia = $thongTinSp['giasp']*$thongTinSp['soLuong'];
          $result[] = array(
            'maDH' => $maDHT,
            'tenSP' => $thongTinSp['tensp'],
            'soLuongSp' => $thongTinSp['soLuong'],
            'donGia' => $dongia
          );
        }
      //-------------------
     echo json_encode($result);
     unset($_SESSION['muaHang']);
     unset($_SESSION['giohang']);
    }
    else {
      $sql2 = "INSERT INTO khachhang(tenKH,soDT,diaChi,email) VALUES('$tenKH','$soDienThoaiKh','$diaChiKh','$email')";
      $themThongTinKh->myQuery($sql2);
      //--------------
      $sql3 = "SELECT khachhang.maKH FROM khachhang WHERE tenKH='$tenKH' AND soDT ='$soDienThoaiKh'";
      $themDH = new sanpham();
      $themDH->myQuery($sql3);
      $maKhMoiThem = $themDH->fetchData();
      $maKh = $maKhMoiThem['maKH'];
      //---------------
      $sql4 = "INSERT INTO donhang(maKH,ngayDatHang,ngayGiaoHang,trangThai,tongThanhToan,cachThanhToan)
       VALUES('$maKh','$ngayDatHang','$ngayGiaoHang','Đang chờ','$tongThanhToan','$cachThanhToan')";
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
       //-------------
       foreach ($_SESSION['giohang'] as $key => $value) {
         $sql10 = "UPDATE sanpham SET sanpham.soLuongDaBan = sanpham.soLuongDaBan + '$value',
         sanpham.soLuongSP = sanpham.soLuongSP - '$value' WHERE maSP = '$key' ";
         $themDH->myQuery($sql10);
       }
       //-------------------
         $sql13 = "SELECT  sanpham.tensp,sanpham.giasp,chitietdonhang.soLuong FROM chitietdonhang INNER JOIN sanpham
         ON (chitietdonhang.masp = sanpham.masp) WHERE chitietdonhang.madh = '$maDHMoiThem'";
         $themDH->myQuery($sql13);
         while ($thongTinSp = $themDH->fetchData()) {
           $dongia = $thongTinSp['giasp']*$thongTinSp['soLuong'];
           $result[] = array(
             'maDH' => $maDHMoiThem,
             'tenSP' => $thongTinSp['tensp'],
             'soLuongSp' => $thongTinSp['soLuong'],
             'donGia' => $dongia
           );
         }
       //-------------------
      echo json_encode($result);
      unset($_SESSION['muaHang']);
      unset($_SESSION['giohang']);
    }
    //-----------------------------------
  }
?>
