
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
          <label class="control-label" id="">Loại sản phẩm: <b style="color:red;">*</b></label>
          <div class="">
            <select class="form-control" name="loaiSanPham">
              <?php
                $sql = "SELECT maLoaiSP,tenLoaiSP FROM loaisanpham";
                $getLoaiSP = new database();
                $getLoaiSP->connectDb();
                $getLoaiSP->myQuery($sql);
                if ($getLoaiSP->numRows() > 0) {
                  while ($kqlsp = $getLoaiSP->fetchData()) {

              ?>
              <option <?php echo "value= ".$kqlsp['maLoaiSP'] ?> > <?php echo $kqlsp['tenLoaiSP'] ?></option>
              <?php
                  }
                }
               ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="" >Tên sản phẩm: <b style="color:red;">*</b></label>
          <div class="">
            <input type="text" class="form-control" name="tenSanPham" id="tenSanPham" placeholder="Nhập tên sản phẩm" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Giá sản phẩm: <b style="color:red;">*</b></label>
          <div class="">
            <input type="text" class="form-control" name="giaSanPham" id="giaSanPham" placeholder="Nhập giá sản phẩm" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" id="">Số lượng: <b style="color:red;">*</b></label>
          <div class="">
            <input type="text" class="form-control" id="soLuongSanPham" name="soLuongSanPham" placeholder="Nhập số lượng sản phẩm" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Mô tả: </label>
          <div class="">
               <textarea class="form-control" rows="6" id="moTaSanPham" name="moTaSanPham" placeholder="Thêm mô tả sản phầm"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" >Thêm ảnh: <b style="color:red;">*</b></label>
          <div class="">
            <input type="file" id="imageUpload" name="imageUpload" required>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 col-md-push-2 row" id="btnThemSanPhamGroup">
      <button type="submit" id="btnThemSanPham" class="btn btn-success" form="formthemSanPham" name="btnThemSanPham">
        Hoàn tất
      </button>
      <button type="reset" id="btnThemSanPhamReset" class="btn btn-danger" form="formthemSanPham">
        Reset
      </button>
      <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#fileExcel">
        Nhập bằng file Excel
        <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
      </button>
    </div>
    <!------------------>
      <div class="col-md-8 col-md-push-2 row collapse" id="fileExcel">
        <div class="col-md-12">
          <form id="" action="../xuly/xulyuploadexcel.php"  method="post" enctype="multipart/form-data" class="form-horizontal">
  							<div class="form-group">
  								<label for="exampleInputFile">Nhập bằng file excel</label>
  								<input type="file" name="excel" id="exampleInputFile">
  								<br/>
  								<button type="submit" class="btn btn-default" name="import">Submit</button>
  								</div>
  				</form>
        </div>
      </div>
    <!------------------>
  </div>
<!-------------------------------------->
