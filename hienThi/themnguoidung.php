
<!-------------------------------------------------------------------------------------->
  <div class="col-md-10" id="qtriRight">
    <!------------------>
      <div class="modal fade bs-example-modal-sm" id="themnhanvientc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <strong>Thêm mới người dùng thành công !</strong>
          </div>
        </div>
      </div>
<!-------------------------------------------------->
      <div class="modal fade bs-example-modal-sm"  id="themnhanvienktc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <strong id="thongbao">Người dùng đã tồn tại !</strong>
          </div>
        </div>
      </div>
<!-------------------------------------------------->
      <div class="col-md-12" id="themSanPhamMoi">
       <div class="well well-sm"><span id="themCayTb">Thêm người dùng mới</span></div>
      </div>
<!-------------------------------------------------->
    <div class="col-md-8 col-md-push-2">
      <form id="formThemNguoiDung" action=""  method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
          <label class="control-label" id="">Loại tài khoản: </label>
          <div class="">
            <select class="form-control" name="loaiTaiKhoanND">
              <option value="0">Chủ cửa hàng</option>
              <option value="1">Nhân viên</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="" >Họ tên:</label>
          <div class="">
            <input type="text" class="form-control" name="" id="tenND" placeholder="Nhập tên người dùng">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Địa chỉ:</label>
          <div class="">
            <input type="text" class="form-control" name="" id="diaChiND" placeholder="Nhập địa chỉ">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Số điên thoại:</label>
          <div class="">
            <input type="text" class="form-control" name="" id="soDienThoaiND" placeholder="Nhập số điện thoại">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Tên đăng nhập:</label>
          <div class="">
            <input type="text" class="form-control" id="tenDangNhapND" name="" placeholder="Nhập tên đăng nhập">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Mật khẩu: </label>
          <div class="">
               <input type="text" class="form-control" id="matKhauND" name="" placeholder="Nhập mật khẩu">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Ghi chú: </label>
          <div class="">
               <textarea class="form-control" rows="6" id="ghiChuND" name="" placeholder="Thêm ghi chú tài khoản"></textarea>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 col-md-push-2 row" id="btnThemSanPhamGroup">
      <button type="button" id="submitThemNguoiDung" class="btn btn-success" form="formThemNguoiDung" name="">
        Hoàn tất
      </button>
      <button type="reset" id="resetThemNguoiDung" class="btn btn-default" form="formThemNguoiDung">
        Reset
      </button>
    </div>
    <!------------------>
  </div>
<!-------------------------------------->
