<?php
  include_once('__autoload.php');
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
    echo "Cap nhat thanh cong";
  }
?>
