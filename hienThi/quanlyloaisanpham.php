<div class="col-md-10" id="qtriRight">
  <!------------------>
    <div class="modal fade bs-example-modal-sm" id="themLoaiSPTC" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Thêm mới loại thành công !</strong>
        </div>
      </div>
    </div>
<!-------------------------------------------------->
    <div class="modal fade bs-example-modal-sm"  id="themLoaiSPKTC" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong id="">Loại sản phẩn đã tồn tại !</strong>
        </div>
      </div>
    </div>
<!-------------------------------------------------->

<!-------------------------------------------------->
    <div class="col-md-12" id="themSanPhamMoi">
     <div class="well well-sm"><span id="">Thêm loại sản phẩm mới</span></div>
    </div>
<!-------------------------------------------------->
  <div class="col-md-8 col-md-push-2">
    <form id="formThemLoaiSP" class="form-horizontal">
      <div class="form-group">
        <label class="control-label" id="" >Tên loại sản phẩm: <b style="color:red;">*</b></label>
        <div class="">
          <input type="text" class="form-control" name="tenLoaiSP" id="tenLoaiSP" data-toggle="tooltipppp" title="Không để trống" placeholder="Nhập tên sản phẩm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Mô tả: </label>
        <div class="">
             <textarea class="form-control" rows="6" id="moTaLoaiSP" name="moTaLoaiSP" placeholder="Thêm mô tả sản phầm"></textarea>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-8 col-md-push-2 row" id="btnThemSanPhamGroup">
    <button type="button" id="submitThemLoaiSP" class="btn btn-success" form="formThemLoaiSP" name="submitThemLoaiSP">
      Hoàn tất
    </button>
    <button type="reset" id="" class="btn btn-default" form="formThemLoaiSP">
      Reset
    </button>
  </div>
  <!------------------>
  <div class="col-md-12" id="loaiSPHCTitle">
   <div class="well well-sm"><span id="">Danh sách các loại sản phẩm hiện có</span></div>
  </div>
  <div class="col-md-12">
    <div class="col-md-12" id="loaiSPHC">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Mã loại</th>
            <th>Tên loại sản phẩm</th>
            <th>Ghi chú</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT* FROM loaisanpham";
            $lsp = new database();
            $lsp->connectDb();
            $lsp->myQuery($sql);
            while ($kql  = $lsp->fetchData()) {
          ?>
          <tr>
            <td><?php echo $kql['maLoaiSP']; ?></td>
            <td><?php echo $kql['tenLoaiSP']; ?></td>
            <td><?php echo $kql['ghiChu']; ?></td>
          </tr>
          <?php }
          $lsp->freeQuery();
          $lsp->disconnectDb();
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!------------------>
</div>
<!-------------------------------------->
