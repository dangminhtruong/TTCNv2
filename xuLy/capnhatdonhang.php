<?php
  include_once('__autoload.php');
  if (isset($_POST['maDonHang'])) {
    $maDH = $_POST['maDonHang'];
    $sql = "SELECT sanpham.tenSP, sanpham.masp, chitietdonhang.soLuong, donhang.trangthai FROM donhang
            INNER JOIN chitietdonhang ON (donhang.maDH = chitietdonhang.maDH AND chitietdonhang.maDH = '$maDH')
            INNER JOIN sanpham ON (chitietdonhang.maSP = sanpham.maSP)";
    $show = new sanpham();
    $show->myQuery($sql);
    if ($show->numRows() > 0) {
      while ($rows = $show->fetchData()) {
        $result[] = array(
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
?>
