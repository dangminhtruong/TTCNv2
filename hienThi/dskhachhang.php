<?php
    include_once('../xuly/__autoload.php');
?>
<div class="col-md-10" id="qtriRight">
    <!-------------------->
    <div class="modal fade bs-example-modal-sm" id="themKhqThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Thêm khách hàng thành công !</strong>
        </div>
      </div>
    </div>
    <!-------------------->
    <div class="modal fade bs-example-modal-sm" id="suaKhqThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Sửa khách hàng thành công !</strong>
        </div>
      </div>
    </div>
    <!-------------------->
    <div class="col-md-12 well">
        <strong>Thống kê tồn kho</strong>
    </div>
    <div class="col-md-12">
          <div class="col-md-12">
              <!----->
              <div class="col-md-12">
                <div class="col-md-2">
                  <label for="">Tên khách hàng</label>
                </div>
                <div class="col-md-4">
                  <label for="">Địa chỉ</label>
                </div>
                <div class="col-md-2">
                  <label for="">Số ĐT</label>
                </div>
                <div class="col-md-3">
                  <label for="">Email</label>
                </div>
                <div class="col-md-1">
                  <label for="">Chọn</label>
                </div>
              </div>
              <!----->
              <div class="col-md-12 tkspBanChay" id="dsKhachQuen">
                <!------------------------->
                  <?php
                    $sql = "SELECT * FROM khachhangquen";
                    $danhSach = new sanpham();
                    $danhSach->myQuery($sql);
                    while ($rows = $danhSach->fetchData()) {
                  ?>
                <!------------------------->
                <div class="col-md-12 khachQuen">
                  <div class="col-md-2">
                      <?php echo $rows['tenKh'] ;?>
                  </div>
                  <div class="col-md-4">
                      <?php echo $rows['diaChi']; ?>
                  </div>
                  <div class="col-md-2">
                      <?php echo $rows['soDt'];?>
                  </div>
                  <div class="col-md-3">
                      <?php echo $rows['email'];?>
                  </div>
                  <div class="col-md-1">
                      <button type="button" class="btn btn-xs btn-danger suaKQ" <?php echo "value=".$rows['id']; ?>>
                        Sửa</button>
                  </div>
                </div>
                <?php
                  }
                ?>
              </div>
              <!----->
          </div>
          <div class="col-md-12 text-left">
              <button type="button" class="btn btn-default" id="btn-themKhachQuen">
                Thêm <i class="fa fa-address-card-o" aria-hidden="true"></i>
              </button>
          </div>
          <!----------------------------------------------------------->
          <div class="col-md-12 collapse" id="themKhachQuen">
            <div class="col-md-12 well well-sm">
                Thêm khách hàng
            </div>
            <form id="" class="text-left">
              <div class="form-group">
                <label for="">Tên khách hàng:</label>
                <input type="" class="form-control" id="tenKhq">
              </div>
              <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="" class="form-control" id="diaChiKhq">
              </div>
              <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="" class="form-control" id="soDtKhq">
              </div>
              <div class="form-group">
                <label for="">Email:</label>
                <input type="" class="form-control" id="emailKhq">
              </div>
              <button type="button" class="btn btn-success" id="themKhq">Xong</button>
              <button type="reset" class="btn btn-default" id="btn-reset-khq">Reset</button>
            </form>
          </div>
          <!--------------------------------------------------------------->
          <div class="col-md-12 collapse" id="suaKhachQuen">
            <div class="col-md-12 well well-sm">
                Sửa thông tin khách hàng
            </div>
            <form id="" class="text-left">
              <div class="form-group">
                <label for="">Tên khách hàng:</label>
                <input type="" class="form-control" id="suaTenKhq">
              </div>
              <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="" class="form-control" id="suaDiaChiKhq">
              </div>
              <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="" class="form-control" id="suaSoDtKhq">
              </div>
              <div class="form-group">
                <label for="">Email:</label>
                <input type="" class="form-control" id="suaEmailKhq">
              </div>
              <button type="button" class="btn btn-success" id="btn-suaKhq">Xong</button>
              <button type="reset" class="btn btn-default" id="btn-reset-suaKhq">Reset</button>
            </form>
          </div>
          <!--------------------------------------------------------------->
    </div>
</div>
<!-------------------------------------->
