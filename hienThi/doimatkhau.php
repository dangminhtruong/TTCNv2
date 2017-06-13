<div class="col-md-10" id="qtriRight">
  <!------------------>
    <div class="modal fade bs-example-modal-sm" id="doiMatkhauthanhcong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Đổi mật khẩu thành công !</strong>
        </div>
      </div>
    </div>
<!-------------------------------------------------->
    <div class="modal fade bs-example-modal-sm"  id="matKhauHienTaiSai" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong id="">Mật khẩu hiện tại không đúng !</strong>
        </div>
      </div>
    </div>
<!-------------------------------------------------->
<div class="modal fade bs-example-modal-sm"  id="khongTrungXacNhanmatKhau" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <strong id="">Xác nhận mật khẩu không trùng khớp !</strong>
    </div>
  </div>
</div>
<!-------------------------------------------------->
    <div class="col-md-12" id="themSanPhamMoi">
     <div class="well well-sm"><span id="">Đổi mật khẩu</span></div>
    </div>
<!-------------------------------------------------->
  <div class="col-md-8 col-md-push-2">
    <form id="formDoiMatKhau" class="form-horizontal">
      <div class="form-group">
        <label class="control-label" id="" >Nhập mật khẩu hiện tại: <b style="color:red;">*</b></label>
        <div class="">
          <input type="text" class="form-control" name="" id="matKhauCu" data-toggle="tooltipppp" title="Không để trống" placeholder="Nhập tên sản phẩm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Nhập mật khẩu mới: <b style="color:red;">*</b></label>
        <div class="">
          <input type="text" class="form-control" name="" id="matKhauMoi" data-toggle="tooltipppp" title="Không để trống" placeholder="Nhập tên sản phẩm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Nhập lại mật khẩu mới: <b style="color:red;">*</b></label>
        <div class="">
          <input type="text" class="form-control" name="" id="xacNhanMatKhauMoi" data-toggle="tooltipppp" title="Không để trống" placeholder="Nhập tên sản phẩm">
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-8 col-md-push-2 row" id="btnThemSanPhamGroup">
    <button type="button" id="btn-doiMatKhau" class="btn btn-success" form="formDoiMatKhau" name="submitThemLoaiSP">
      Hoàn tất
    </button>
    <button type="reset" id="" class="btn btn-default" form="formDoiMatKhau">
      Reset
    </button>
  </div>
  <!------------------>
  <!------------------>
</div>
<!-------------------------------------->
