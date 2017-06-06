<?php
  include_once('__autoload.php');
  session_start();
  if (isset($_POST['maDonHang'])) {
    $maDH = $_POST['maDonHang'];
    $sql = "SELECT sanpham.tenSP,sanpham.giaSP, sanpham.masp, chitietdonhang.soLuong, donhang.trangthai,
                    donhang.tongthanhtoan, donhang.maDH
            FROM donhang
            INNER JOIN chitietdonhang ON (donhang.maDH = chitietdonhang.maDH AND chitietdonhang.maDH = '$maDH')
            INNER JOIN sanpham ON (chitietdonhang.maSP = sanpham.maSP)";
    $show = new sanpham();
    $show->myQuery($sql);
    if ($show->numRows() > 0) {
      while ($rows = $show->fetchData()) {
        $result[] = array(
           'maDH' => $rows["maDH"],
           'tongTien' => $rows["tongthanhtoan"],
           'donGiaSP' => $rows["giaSP"],
           'maS' => $rows["masp"],
           'tenS' => $rows["tenSP"],
           'soLuongS' => $rows["soLuong"],
           'trangThai' =>  $rows["trangthai"]
        );
      }
     echo json_encode($result);
    }
    else {
      echo "NOPE";
    }
  }
  //-------------------------------------------------------
  elseif (isset($_POST['maDonH'], $_POST['maSanPham'], $_POST['tongSoLuongM'],$_POST['soLuongM'],$_POST['capNhatTongHD'])) {
    $maDH = $_POST['maDonH'];
    $maSP = $_POST['maSanPham'];
    $tongSoLuongMoi = $_POST['tongSoLuongM'];
    $soLuongMoi = $_POST['soLuongM'];
    $tongHD = $_POST['capNhatTongHD'];

    $sql2 = "UPDATE chitietdonhang SET soluong = '$soLuongMoi' WHERE (maDH = '$maDH' AND maSP = '$maSP')";
    $upDate = new sanpham();
    $upDate->myQuery($sql2);

    $sql3 = "UPDATE donhang SET tongThanhToan = '$tongHD'  WHERE maDH = '$maDH'";
    $upDate->myQuery($sql3);
    $sql4 = "UPDATE sanpham SET sanpham.soLuongSP = (sanpham.soLuongSP + '$tongSoLuongMoi') WHERE maSP = '$maSP'";
    $upDate->myQuery($sql4);
    $sql5 = "UPDATE sanpham SET sanpham.soLuongDaBan = (sanpham.soLuongDaBan - '$tongSoLuongMoi') WHERE maSP = '$maSP'";
    $upDate->myQuery($sql5);
    echo "Cap nhat thanh cong";
  }
  elseif (isset($_POST['maDHU'],$_POST['trangThai'])) {
    $maDHU  = $_POST['maDHU'];
    $trangThai = $_POST['trangThai'];
    $nhanVienXuLy = $_SESSION['nhanVien'];
    $sql6 = "UPDATE donhang SET donhang.trangthai = '$trangThai', donhang.maNV = '$nhanVienXuLy' WHERE donhang.maDH = '$maDHU'";
    $upDate2 = new sanpham();
    $upDate2->myQuery($sql6);
    echo $trangThai;
  }
  elseif (isset($_POST['maDhDel'])) {
    $maDhDel = $_POST['maDhDel'];
    $sql7 = "SELECT chitietdonhang.masp, chitietdonhang.soluong FROM chitietdonhang WHERE madh = '$maDhDel'";
    $upDate3 = new sanpham();
    $upDate3->myQuery($sql7);
    if ($upDate3->numRows() > 0 ) {
        while ($rows = $upDate3->fetchData()) {
          $mas =  $rows['masp'];
          $sl = $rows['soluong'];
          echo $mas;
          echo $sl;
          $sql8 = "UPDATE sanpham SET sanpham.soLuongSp = (sanpham.soLuongSp + '$sl') WHERE maSP = '$mas'";
          $upDate4 = new sanpham();
          $upDate4->myQuery($sql8);
          $mas = 0;
          $sl = 0;
        }
    }
    $sql9 = "DELETE FROM chitietdonhang WHERE maDH  = '$maDhDel'";
    $upDate3->myQuery($sql9);
    $sql10 = "DELETE FROM donhang WHERE maDH  = '$maDhDel'";
    $upDate3->myQuery($sql10);
    echo "something";
  }
?>
