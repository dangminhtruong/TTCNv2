
<!-------------------------------------------------------------------------------------->
  <div class="col-md-10" id="qtriRight">
    <!------------------>
      <div class="modal fade bs-example-modal-sm" id="themSPThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <strong>Thêm mới thành công !</strong>
          </div>
        </div>
      </div>
<!-------------------------------------------------->
      <div class="modal fade bs-example-modal-sm"  id="trungLapSP" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <strong id="thongbao">Sản phẩn đã tồn tại !</strong>
          </div>
        </div>
      </div>
<!-------------------------------------------------->
      <div class="col-md-12" id="themSanPhamMoi">
       <div class="well well-sm"><span id="themCayTb">Thêm sản phẩm mới</span></div>
      </div>
<!-------------------------------------------------->
    <div class="col-md-8 col-md-push-2">
      <form id="formthemSanPham" action="../xuLy/xulythemsanpham.php"  method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
          <label class="control-label" id="">Loại sản phẩm: </label>
          <div class="">
            <select class="form-control" name="loaiSanPham">
              <option value="cayanqua">Cây ăn quả</option>
              <option value="caycongtrinh">Cây công trình</option>
              <option value="hoacaycanh">Hoa cây cảnh</option>
              <option value="caylaygo">Cây lấy gỗ</option>
              <option value="khac">Khác...</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="" >Tên sản phẩm:</label>
          <div class="">
            <input type="text" class="form-control" name="tenSanPham" id="tenSanPham"  data-toggle="tooltip1" data-placement="top" title="Không để trống!" placeholder="Nhập tên sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Giá sản phẩm:</label>
          <div class="">
            <input type="text" class="form-control" name="giaSanPham" id="giaSanPham" data-toggle="tooltip2" data-placement="bottom" title="Không để trống!" placeholder="Nhập giá sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Số lượng:</label>
          <div class="">
            <input type="text" class="form-control" id="soLuongSanPham" name="soLuongSanPham" data-toggle="tooltip3" data-placement="bottom" title="Không để trống!" placeholder="Nhập số lượng sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Mô tả: </label>
          <div class="">
               <textarea class="form-control" rows="6" id="moTaSanPham" name="moTaSanPham" data-toggle="tooltip4" data-placement="bottom" title="Không để trống!" placeholder="Thêm mô tả sản phầm"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" >Thêm ảnh:</label>
          <div class="">
            <input type="file" id="imageUpload" data-toggle="tooltip5" data-placement="left" title="Không để trống!" name="imageUpload">
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 col-md-push-2 row" id="btnThemSanPhamGroup">
      <button type="submit" id="btnThemSanPham" class="btn btn-success" form="formthemSanPham" name="btnThemSanPham">
        Hoàn tất
      </button>
      <button type="reset" id="btnThemSanPhamReset" class="btn btn-default" form="formthemSanPham">
        Reset
      </button>
    </div>
    <!------------------>
  </div>
<!-------------------------------------->
