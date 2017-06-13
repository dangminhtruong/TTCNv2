<?php
  include_once('../xuly/__autoload.php');
  if (isset($_GET['madh'])) {
    $maDH = $_GET['madh'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Xuất hóa đơn</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/qtristyle.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <!--------------------->
            <div class="col-md-12" id="tenHoaDon">
              <strong>HÓA ĐƠN BÁN HÀNG</strong>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                <div class="col-md-12">
                  <strong>Giống cây trồng DŨNG HẠNH</strong><br/>
                </div>
                <div class="col-md-12">
                    <br/>
                    <strong>Địa chỉ :</strong> <i>Số 4 đường Học Viện Nông Nghiệp Việt Nam</i>
                </div>
                <div class="col-md-12">
                    <strong>Số điện thoại :</strong> <i>01292007776</i>
                </div>
              </div>
              <div class="col-md-6">

              </div>
            </div>
            <!--------------------->
            <div class="col-md-12">
                <div class="col-md-12">
                  <div class="col-md-12">
                    ....<br>
                    <!----------->
                    <?php
                      $sql = "SELECT* FROM khachhang WHERE maKH = (SELECT donhang.maKH FROM donhang WHERE donhang.maDH = '$maDH')";
                      $xuatDonHang = new user();
                      $xuatDonHang->myQuery($sql);
                      $thongTinKhach = $xuatDonHang->fetchData();
                    ?>
                    <!----------->
                    <strong>Họ tên khách hàng :</strong> <i><?php echo $thongTinKhach['tenKH'];?></i>
                  </div>
                  <div class="col-md-12">
                    <strong>Địa chỉ :</strong> <i><?php echo $thongTinKhach['diaChi'];?></i>
                  </div>
                  <div class="col-md-12">
                    <strong>Số ĐT :</strong><i><?php echo $thongTinKhach['soDT'];?></i>
                    <br>
                  </div>
                </div>
            </div>
            <!--------------------->
            <div class="col-md-12">
              <div class="col-md-12">
                <div class="col-md-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên loại mặt hàng</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql1 = "SELECT sanpham.tenSP, sanpham.giaSP, chitietdonhang.soLuong, (sanpham.giaSP * chitietdonhang.soLuong) as 'donGia'
                        FROM chitietdonhang INNER JOIN sanpham ON (chitietdonhang.maSP = sanpham.maSP)
                        WHERE chitietdonhang.maDH = '$maDH'";
                        $xuatDonHang->myQuery($sql1);
                        $i = 0;
                        while ($chiTietDH = $xuatDonHang->fetchData()) {
                          $i += 1;
                      ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $chiTietDH['tenSP']; ?></td>
                        <td><?php echo $chiTietDH['soLuong']; ?></td>
                        <td><?php echo $chiTietDH['giaSP']; ?><u>đ</u></td>
                        <td><?php echo $chiTietDH['donGia']; ?><u>đ</u></td>
                      </tr>
                      <?php
                          }
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <?php
                          $sql2 = "SELECT tongthanhtoan FROM donhang WHERE maDH  = '$maDH'";
                          $xuatDonHang->myQuery($sql2);
                          $tongHD = $xuatDonHang->fetchData();
                        ?>
                        <td><strong>Tổng</strong></td>
                        <td><strong><?php echo $tongHD['tongthanhtoan']; ?><u>đ</u></strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!------------->
            <div class="col-md-12">
              <div class="col-md-12">
                <div class="col-md-6" id="kyTenKh">
                    <i>Khách hàng<br/>(Ký tên)</i><br/><br/><br/><br/>
                    <?php echo $thongTinKhach['tenKH'];?>
                </div>
                <div class="col-md-6" id="kyTenNB">
                    <i>Người bán hàng<br/>(Ký tên)</i><br/><br/><br/><br/>
                    <?php
                      $sql3 = "SELECT hoTenNV FROM nhanvien INNER JOIN donhang ON (donhang.maNV = nhanvien.maNV)
                      WHERE maDH = '$maDH'";
                      $xuatDonHang->myQuery($sql3);
                      $tenNV = $xuatDonHang->fetchData();
                      echo $tenNV['hoTenNV'];
                    ?>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-------------------->
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
