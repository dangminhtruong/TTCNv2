
<div class="container-fluid" id="thanhtoan">
  <!-------------------->
    <div class="modal fade" id="datHangThanhCong" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header well">
            <h4 class="modal-title"><strong>Đặt hàng thành công - DH</strong><strong id="maDonHang"></strong></h4>
          </div>
          <div class="modal-body" id="thongTinDonHang">
              <div class="col-md-6">
                  <div class="col-md-12">
                      Họ tên : <i id="tenKhHd"></i>
                  </div>
                  <div class="col-md-12">
                      Địa chỉ : <i id="diaChiKhHd"></i>
                  </div>
                  <div class="col-md-12">
                      Số điện thoại : <i id="soDtKhHd"></i>
                  </div>
                  <div class="col-md-12">
                      Email : <i id="emailKhHd"></i>
                  </div>
                  <div class="col-md-12">
                      Hình thức thanh toán: <i id="cachThanhToanHd"></i>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="col-md-6">
                        Tên sản phẩm
                    </div>
                    <div class="col-md-3">
                        Số Lượng
                    </div>
                    <div class="col-md-3">
                        Đơn giá
                    </div>
                    <div class="col-md-12" id="themTTSoLuongSp">

                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-5">
                          Tổng thanh toán :
                        </div>
                        <div class="col-md-3">
                          <i id="tongThanhToanHD"></i><u>đ</u>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-12" id="loiCamOn">
                  <strong>Cảm ơn bạn đã ủng hộ nhà vườn chúng tôi. Sản phẩm sẽ được chuyển đến bạn trong vòng 3 ngày tới...</strong>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" id="closeDatHangThanhCong">Close</button>
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
        <a href="index.php?page=trangchu" type="button" class="btn btn-info btn-muaThem">
          Mua thêm
          <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
        </a>
      </div>
  </div>
<!----------------------------------------------------->
  <div class="col-md-12 collapse" id="formNTTKH">
    <form>
      <div class="form-group">
        <label for="email">Họ tên: <b style="color:red;">*</b></label>
        <input type="text" class="form-control" id="hoTenKh" data-toggle="tenKhachs" title="Không để trống">
      </div>
      <div class="form-group">
        <label for="pwd">Địa chỉ giao hàng: <b style="color:red;">*</b></label>
        <input type="text" class="form-control" id="diaChiKh" data-toggle="diaChiKhachs" title="Không để trống">
      </div>
      <div class="form-group">
        <label for="pwd">Số điện thoại: <b style="color:red;">*</b></label>
        <input type="text" class="form-control" id="soDienThoaiKh" data-toggle="soDienThoaiKhachs" title="Không để trống">
      </div>
      <div class="form-group">
        <label for="email">Địa chỉ Email:</label>
        <input type="email" class="form-control" id="emailKh">
      </div>
      <div class="form-group">
        <label for="sel1">Hình thức thanh toán: <b style="color:red;">*</b></label>
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
