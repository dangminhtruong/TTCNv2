<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$homNay =  date('Y/m/d');
?>
<div class="col-md-10" id="qtriRight">
  <!------------------>
  <div class="modal fade bs-example-modal-sm" id="capNhatDonHang" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Tình trạng</th>
            <th>Lựa chọn</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>Hoa đồng tiền</td>
              <td>
                <input type="text" class="form-control setSize" name="" placeholder="20">
              </td>
              <td>
                <select class="form-control" id="" name="">
                  <option  value="Đang chờ">Đang chờ</option>
                  <option  value="Đã xác nhận">Đã xác nhận</option>
                  <option  value="Đang chuyển hàng">Đang chuyển hàng</option>
                  <option  value="Hoàn tất">Hoàn tất</option>
                </select>
              </td>
              <td>
                  <button type="button" class="btn btn-sm btn-primary" name="button">Cập nhật</button>
              </td>
            </tr>
        </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
  <!------------------>
    <div class="col-md-12 col-xs-12" id="locDonHang">
      <form class="" role="form">
        <!-------->
        <div class="col-md-5">
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
              <label class="sr-only" for=""></label>
              <input type="text" class="form-control" id="timTuNgay" placeholder="Tìm từ ngày">
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <input type="text" class="form-control" id="timDenNgay" placeholder="Đến ngày">
            </div>
          </div>
        </div>
        <!-------->
        <div class="col-md-6">
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
            <select class="form-control" id="timTheoTuanThang" name="timTheoTuanThang">
              <option value="null">Tìm trong</option>
              <option value="timTrongTuan">Tuần này</option>
              <option value="timTrongThang">Tháng này</option>
            </select>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
              <select class="form-control" id="timTheoTinhTrang" name="timTheoTinhTrang">
                <option value="null">Tình trạng đơn hàng</option>
                <option  value="Đang chờ">Đang chờ</option>
                <option  value="Đã xác nhận">Đã xác nhận</option>
                <option  value="Đang chuyển hàng">Đang chuyển hàng</option>
                <option  value="Hoàn tất">Hoàn tất</option>
              </select>
            </div>
          </div>
        </div>
        <!-------->
        <div class="col-md-1 col-xs-12">
          <button type="button" class="btn btn-sm btn-success" id="timKiemDonHang">Lọc</button>
        </div>
      </form>
    </div>
  <!------------------>
    <div class="col-md-12 hidden-xs" id="xdh-Colum">

      <div class="col-md-3 colInXdh">
          <strong>Chi tiết đơn hàng</strong>
      </div>
      <div class="col-md-2  colInXdh1">
          <strong>Chi tiết hóa đơn</strong>
      </div>
      <div class="col-md-3  colInXdh">
        <strong>Thông tin khách hàng</strong>
      </div>
      <div class="col-md-2  colInXdh1">
          <strong>Tình trạng</strong>
      </div>
      <div class="col-md-2  colInXdh">
          <strong>Lựa chọn</strong>
      </div>
    </div>
    <!---------------->
    <div class="col-md-12" id="hienThiDonHang">
      <?php
          include_once("../xuly/__autoload.php");
          $hienDH = new sanpham();
          $sql = "SELECT khachhang.tenkh, khachhang.diachi, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE donhang.ngaydathang = '$homNay'";
          $hienDH->myQuery($sql);
          if ($hienDH->numRows() > 0) {
            for ($i=0; $i <$hienDH->numRows() ; $i++) {
                $res = $hienDH->fetchData();
                $maDH = $res['madh'];
      ?>
      <div class="container-fluid donHang">
        <div class="col-md-3">
          <?php
              $hienDssp = new sanpham();
              $sql2 = "SELECT chitietdonhang.soluong, sanpham.tensp, donhang.madh FROM chitietdonhang INNER JOIN sanpham
              INNER JOIN donhang ON (chitietdonhang.masp = sanpham.maSP AND chitietdonhang.madh = donhang.madh)
              WHERE donhang.madh = $maDH";
              $hienDssp->myQuery($sql2);
              while ($res2 = $hienDssp->fetchData($sql2)) {
           ?>
            <?php echo $res2['tensp'] ?> <span class="badge"><?php echo $res2['soluong'] ?></span><br/>

            <?php
              }
            ?>
        </div>
        <div class="col-md-2">
            Tổng thanh toán:<br/> <?php echo $res["tongthanhtoan"] ?><u>đ</u><br/>
            Ngày đặt hàng:<br/> <?php echo $res["ngaydathang"] ?>
        </div>
        <div class="col-md-3">
            Tên :<?php echo $res["tenkh"] ?><br/>
            Địa chỉ: <?php echo $res["diachi"] ?>
        </div>
        <div class="col-md-2">
            <?php echo $res["trangthai"] ?>
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-sm btn-primary btn-capNhatDH" <?php echo "value=". $res['madh'] ?>>Cập nhật</button>
          <button type="button" class="btn btn-sm btn-danger btn-huyDH" <?php echo "value=". $res['madh'] ?>>Hủy</button>
        </div>
    </div>
    <?php
      }
    }
    ?>
    </div>
</div>
<!-------------------------------------->
