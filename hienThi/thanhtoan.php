
<div class="container-fluid" id="thanhtoan">
  <?php
    if (isset($_SESSION['soSanPhamMua'])) {

  ?>
  <div class="col-md-12" id="thanhToanTop">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        <th>Lựa chọn</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once("xuly/__autoload.php");
        $sql1 = "SELECT sanpham.tenSP, sanpham.giaSP,sanpham.maSP, giohang.SoLuong, giohang.tongTien
                FROM sanpham INNER JOIN giohang ON sanpham.maSP = giohang.maSanPham";
        $ttHoaDon = new sanpham();
        $ttHoaDon->myQuery($sql1);
        if ($ttHoaDon->numRows() > 0) {
          while ($rows = $ttHoaDon->fetchData()) {

      ?>
      <tr>
        <td><?php echo $rows['tenSP'] ?></td>
        <td><input type="text" class="form-control formInTT" <?php echo "placeholder=".$rows['SoLuong'] ?>>
        </td>
        <td><?php echo $rows['giaSP'] ?></td>
        <td><?php echo $rows['tongTien'] ?></td>
        <td>
          <button type="button" class="btn btn-xs btn-warning btn-CapNhatSl" <?php echo "value=".$rows['maSP'] ?>>Cập nhật</button>
          <button type="button" class="btn btn-xs btn-danger btn-CapNhatSl" <?php echo "value=".$rows['maSP'] ?>>Xóa</button>
        </td>
      </tr>
      <?php
          }
        }
        $ttHoaDon->freeQuery();
        $ttHoaDon->disconnectDb();
      ?>
    </tbody>
  </table>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12 well" id="tongTien">
      <div class="col-md-4 col-sm-6 col-xs-6 col-md-push-5">
        <strong>
          <?php
            $tongHoaDon = new sanpham();
            $sql2 = "SELECT Sum(giohang.tongTien) as 'tongHd' FROM giohang ";
            $tongHoaDon->myQuery($sql2);
            $rows2 = $tongHoaDon->fetchData();
          ?>
          Tổng tiền : <?php echo $rows2['tongHd'] ?><u> vnđ</u>
        </strong>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-md-push-5">
        <button type="button" class="btn btn-success btn-muaThem" data-toggle="collapse" data-target="#formNTTKH">
          Hoàn tất thanh toán
          <i class="fa fa-check-square-o" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-info  btn-muaThem">
          Mua thêm
          <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
        </button>
      </div>
  </div>

  <div class="col-md-12 collapse" id="formNTTKH">
    <form>
    <div class="form-group">
      <label for="email">Họ tên:</label>
      <input type="text" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Địa chỉ giao hàng:</label>
      <input type="text" class="form-control" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Số điện thoại:</label>
      <input type="text" class="form-control" id="pwd">
    </div>
    <div class="form-group">
      <label for="sel1">Phương thức thanh toán:</label>
      <select class="form-control" id="sel1">
        <option>Nhận hàng - giao tiền</option>
        <option>Chuyển khoản ngân hàng</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Đặt hàng</button>
    </form>
  </div>
  <?php
    }
    else {
  ?>
    <div class="col-md-12" id="tbChuaCoGioHang">
          Bạn hiện chưa có sản phẩm nào trong giỏ hàng...
    </div>
  <?php
    }
  ?>
</div>
