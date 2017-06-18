<div class="col-md-10" id="qtriRight">
  <div class="modal fade bs-example-modal-sm" id="suaBaiVietThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <strong>Sửa bài viết thành công !</strong>
      </div>
    </div>
  </div>
  <!------------------------->
  <div class="modal fade bs-example-modal-sm" id="xoaBaiVietThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <strong>Xóa bài viết thành công !</strong>
      </div>
    </div>
  </div>
  <!-------------------------->
  <div class="col-md-12 well">
      <strong>Sửa bài viết</strong>
  </div>
  <!---------------------------------->
  <div class="col-md-12 tkspBanChay" id="dsBaiViet">
    <table class="table table-hover">
      <thead>
      </thead>
      <tbody>
        <?php
            $sql = "SELECT * FROM baiviet";
            $dsBaiViet = new sanpham();
            $dsBaiViet->myQuery($sql);
            if ($dsBaiViet->numRows() > 0) {
              while ($ds = $dsBaiViet->fetchData()) {
        ?>
        <tr>
          <td><p <?php echo "id=tieuDe".$ds['id'];?>><?php echo $ds['tieuDe']; ?></p></td>
          <td>
            <button type="button" class="btn btn-warning btn-xs btn-suaBaiViet" <?php echo "value=".$ds['id'];?>>Sửa</button>
            <button type="button" class="btn btn-danger btn-xs btn-xoaBaiViet" <?php echo "value=".$ds['id'];?>>Xóa</button>
          </td>
        </tr>
        <?php
              }
            }
        ?>
      </tbody>
    </table>
  </div>
  <!---------------------------------->
  <div class="collapse" id="suaBaiBaiViet">
    <div class="col-md-12 well">
        <strong>Sửa bài viết</strong>
    </div>
    <div class="col-md-12">
        <form class="form-horizontal" role="form">
          <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tiêu đề bài viết</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="upDateTieuDeBv"></textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nội dung</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="20" id="upDateNoiDungBv"></textarea>
              </div>
          </div>
          <div class="form-group">
              <button type="button" class="btn btn-primary" id="btn-suaBv">Hoàn tất</button>
              <button type="button" class="btn btn-default" id="btn-ThemBv"><a href="../hienThi/quantri.php">Thoát</a></button>
          </div>
        </form>
    </div>
  </div>
</div>
