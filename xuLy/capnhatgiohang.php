<?php
  session_start();
  if (isset($_POST['maSP'],$_POST['soLuong'])){
    $maSP = $_POST['maSP'];
    $soLuong = $_POST['soLuong'];
    $donGia = $_POST['donGia'];
    $thanhTien = $_POST['tongDonGia'];
    $tongHD  = $_POST['tongHD'];
    $capNhatHoaDon = $tongHD - $thanhTien;

    foreach ($_SESSION['giohang'] as $key => $value) {
      if ($key = $maSP) {
         $_SESSION['giohang'][$key] = $soLuong;
         $capNhatSoLuong = $_SESSION['giohang'][$key];
         $thanhTien = $_SESSION['giohang'][$key] * $donGia;
         $capNhatHoaDon += $thanhTien;
         $result = array(
           'maS' => $maSP,
           'capNhatSoLuong' => $capNhatSoLuong,
           'thanhTien' => $thanhTien,
           'capNhatHoaDon' => $capNhatHoaDon
         );
         echo json_encode($result);
        break;
      }
    }
  }
  elseif (isset($_POST['maSanPhamXoaBo'])) {
        $sanPhamXoa = $_POST['maSanPhamXoaBo'];
          if (array_key_exists($sanPhamXoa,$_SESSION["giohang"]) == true) {
            unset($_SESSION["giohang"][$sanPhamXoa]);
            echo $_SESSION['muaHang'];
        }
        else {
          echo "khong tim thay";
        }
  }
  elseif (isset($_POST['guiThongBao'])) {
      unset($_SESSION['muaHang']);
      unset($_SESSION["giohang"]);
      echo "Xu ly thanh cong";
  }
?>
