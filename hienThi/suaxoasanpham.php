<!------------------------------------------------------------------->
  <div class="col-md-10" id="qtriRight">
    <!------------------------------------------------------>
    <div class="modal fade bs-example-modal-sm" id="suaSPThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Sửa sản phẩm thành công !</strong>
        </div>
      </div>
    </div>
    <!------------------------------------------------------>
    <div class="modal fade bs-example-modal-sm" id="xoaSPThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Xóa sản phẩm thành công !</strong>
        </div>
      </div>
    </div>
    <!------------------------------------------------------->
    <div class="modal fade" id="SuaSanPhamModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sửa sản phẩm</h4>
          </div>
          <div class="modal-body">
            <div class="col-md-12" id="modal-body-form">
            <form id="formSuaSanPham" action="../xuLy/xulysuasanpham.php"  method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
                <label class="control-label" id="">Loại sản phẩm: </label>
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
                <label class="control-label" id="" >Tên sản phẩm:</label>
                <div class="">
                  <input type = "text" hidden id="idSanPham" name = "idSanPham">
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
                  <input type="file" id="imageUpload"  name="imageUploadEdit" data-toggle="tooltip5" data-placement="left" title="Không để trống!">
                </div>
              </div>
            </form>
          </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" form="formSuaSanPham" name="btnSuaSP">Xong</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
<!------------------------------------------->
      </div>
    </div>
    <!------------------------------------------------------>
    <div class="col-md-12" id="suaxoasanpham">
       <div class="well well-lg">
         <form class="form-horizontal">
           <div class="form-group row">
             <button type="button" class="btn btn-default col-xs-4 col-md-1 col-md-push-3">
                <i class="fa fa-search" aria-hidden="true"></i> Search
             </button>
              <div class="col-xs-8 col-md-6 col-md-push-3">
                <input type="text" class="form-control dropdown" data-toggle="dropdown" id="timSanPhamCanSua" placeholder="Nhập tên sản phẩm cần sửa...">
                <ul class="col-xs-11 col-md-11 dropdown-menu dropdown-menu dropdown-menu-center" role="menu">
                  <li id="markToAdd" class="dropdown-header">Kết quả tìm kiếm</li>
                  <li class="divider"></li>
                </ul>
              </div>
            </div>
        </form>
     </div>
   </div>
   <div class="col-md-12 myscroll">
       <table class="table table-hover">
        <thead>
          <tr>
            <th>Lựa chọn</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT maSP,tenSP, soLuongSP, giaSP, tenLoaiSP FROM sanpham INNER JOIN loaisanpham ON sanpham.maLoaiSP = loaisanpham.maLoaiSP GROUP BY tenSP";
            $sp = new database();
            $sp->connectDb();
            $sp->myQuery($sql);
            while ($kq  = $sp->fetchData()) {

          ?>
          <tr>
            <td>
              <button type="button" class="btn btn-default btn-xs btn-edit1" <?php echo "value = ".$kq['maSP']; ?>>
                Sửa
              </button>
              <button type="button" class="btn btn-danger btn-xs btn-delete" <?php echo "value = ".$kq['maSP']; ?>>Xóa</button>
            </td>
            <td><?php echo $kq['maSP']; ?></td>
            <td><?php echo $kq['tenSP']; ?></td>
            <td><?php echo $kq['tenLoaiSP']; ?></td>
            <td><?php echo $kq['giaSP']; ?></td>
            <td><?php echo $kq['soLuongSP']; ?></td>
          </tr>
          <?php
        }
            $sp->freeQuery();
            $sp->disconnectDb();
             ?>
        </tbody>
    </table>
   </div>
 </div>
<!-------------------------->
</div>
