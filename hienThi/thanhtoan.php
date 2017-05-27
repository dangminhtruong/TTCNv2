
<div class="container-fluid" id="thanhtoan">
  <!-------------------->
  <div class="container">
    <div class="modal fade" id="datHangThanhCong" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Đặt hàng thành công</h4>
          </div>
          <div class="modal-body">
            <p>Cám ơn bạn đã ủng hộ nhà vườn chúng tôi.
              Sản phẩm sẽ được chuyển đến bạn trong vòng 3 ngày tới...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" id="closeDatHangThanhCong">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-------------------->
  <?php
    if (isset($_SESSION['muaHang'])) {
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
    <tbody id="mark1">
      <?php
        include_once("xuly/__autoload.php");
        $ttHoaDon = new sanpham();
        $tongHoaDon = 0;
        foreach ($_SESSION['giohang'] as $key => $value) {
          $sql1 = "SELECT sanpham.tenSP, sanpham.giaSP,sanpham.maSP FROM sanpham  WHERE maSP = '$key' ";
          $ttHoaDon->myQuery($sql1);
          $rows = $ttHoaDon->fetchData();
          $tongTien = $rows['giaSP']*$value;
          $tongHoaDon += $tongTien;
      ?>
      <tr <?php echo "id=tr".$rows['maSP'] ?>>
        <td  <?php echo "id=tenS".$rows['maSP'] ?>><?php echo $rows['tenSP']; ?></td>
        <td><input type="text" class="form-control suaSoLuong" <?php echo "placeholder=".$value." id=".$rows['maSP']; ?>>
        </td>
        <td <?php echo "id=gia".$rows['maSP']?>><?php echo $rows['giaSP']; ?></td>
        <td <?php echo "id=tongtien".$rows['maSP']?>><?php echo $tongTien; ?></td>
        <td>
          <button type="button" class="btn btn-xs btn-warning btn-CapNhatSl"  <?php echo "value=".$rows['maSP']; ?>>Cập nhật</button>
          <button type="button" class="btn btn-xs btn-danger btn-botSanPham" <?php echo "value=".$rows['maSP']; ?>>Xóa</button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12 well" id="tongTien">
      <div class="col-md-4 col-md-push-4">
        <strong>
          Tổng thanh toán : <b id="tongTienHoaDon"><?php echo $tongHoaDon; ?></b><u> vnđ</u>
        </strong>
      </div>
      <div class="col-md-4 col-md-push-4">
        <button type="button" class="btn btn-success btn-muaThem" data-toggle="collapse" data-target="#formNTTKH">
          Thanh toán
          <i class="fa fa-check-square-o" aria-hidden="true"></i>
        </button>
        <a href="http://localhost/TTCNv2/index.php?page=trangchu" type="button" class="btn btn-info btn-muaThem">
          Mua thêm
          <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
        </a>
      </div>
  </div>
<!----------------------------------------------------->
  <div class="col-md-12 collapse" id="formNTTKH">
    <form>
      <div class="form-group">
        <label for="email">Họ tên:</label>
        <input type="text" class="form-control" id="hoTenKh">
      </div>
      <div class="form-group">
        <label for="pwd">Địa chỉ giao hàng:</label>
        <input type="text" class="form-control" id="diaChiKh">
      </div>
      <div class="form-group">
        <label for="pwd">Số điện thoại:</label>
        <input type="text" class="form-control" id="soDienThoaiKh">
      </div>
      <div class="form-group">
        <label for="email">Địa chỉ Email:</label>
        <input type="email" class="form-control" id="emailKh">
      </div>
      <div class="form-group">
        <label for="sel1">Hình thức thanh toán:</label>
        <select class="form-control" name="hinhThucTT">
          <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
          <option value="Chuyển khoản ngân hàng">Thanh toán qua ngân hàng</option>
        </select>
      </div>
      <button type="button" class="btn btn-success" id="btnDatHang">Đặt hàng</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </form>
  </div>
<!------------------------------------------------------------------------>
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
