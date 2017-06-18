<div class="col-md-10" id="qtriRight">
  <!------------------>
  <div class="modal fade bs-example-modal-sm" id="thongKeDoanhThuTB" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <strong>Xin lỗi, tài khoản của bạn hiện không sử dụng được chức năng này !</strong>
      </div>
    </div>
  </div>
  <!------------------>
  <div class="col-md-6" id="qLyCay">
    <div class="panel panel-gray">
      <div class="panel-heading"><span><strong>Quản lý sản phẩm</strong></span></div>
    </div>
    <a href="../hienthi/quantri.php?page=themsanpham">
      <div class="col-md-4 hvr-grow-shadow">
        <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i><br/>
        <span>Thêm sản phẩm</span>
      </div>
    </a>
    <a href="../hienThi/quantri.php?page=suaxoasanpham">
      <div class="col-md-4 hvr-grow-shadow">
        <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i><br/>
        <span>Sửa - xóa sản phẩm</span>
      </div>
    </a>
    <a href="../hienThi/quantri.php?page=quanlyloaisanpham">
      <div class="col-md-4 hvr-grow-shadow">
        <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i><br/>
        <span>Quản lí loại sản phẩm</span>
      </div>
    </a>
  </div>
  <!--------------------------------->
  <div class="col-md-6" id="qLyDonH">
    <div class="panel  panel-default">
      <div class="panel-heading"><span><strong>Quản lý đơn hàng</strong></span></div>
    </div>
    <a href="../hienThi/quantri.php?page=xemdonhang">
      <div class="col-md-4 col-md-push-4 hvr-grow-shadow">
        <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i><br/>
        <span>Quản lý đơn hàng</span>
      </div>
    </a>
  </div>
<!------------------------------------->
  <div class="col-md-6" id="qLyUser">
    <div class="panel  panel-default">
      <div class="panel-heading"><span><strong>Quản lý người dùng</strong><span></div>
    </div>
    <?php
    if (isset($_SESSION['loaiTK'])) {
      if ($_SESSION['loaiTK'] == 0) {
    ?>
    <a href="../hienThi/quantri.php?page=themnguoidung">
      <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
        <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i><br/>
        <span>Thêm người dùng</span>
      </div>
    </a>
    <a href="../hienThi/quantri.php?page=suaxoanguoidung">
      <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
        <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i><br/>
        <span>Sửa xóa - người dùng</span>
      </div>
    </a>
    <?php
      }
      else {
    ?>
    <a href="#" class="thongKeDT">
      <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
        <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i><br/>
        <span>Thêm người dùng</span>
      </div>
    </a>
    <a href="#" class="thongKeDT">
      <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
        <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i><br/>
        <span>Sửa xóa - người dùng</span>
      </div>
    </a>
    <?php
      }
    }
    ?>
  </div>
<!-------------------------------------->
  <div class="col-md-6" id="qLyThongKe">
    <div class="panel  panel-gray">
      <div class="panel-heading"><span><strong>Thống kê - báo cáo</strong></span></div>
    </div>
    <!------>
    <?php
        if (isset($_SESSION['loaiTK'])) {
          if ($_SESSION['loaiTK'] == 0) {
    ?>
          <a href="../hienThi/quantri.php?page=xemdoanhthu">
            <div class="col-md-4 hvr-grow-shadow">
              <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i><br/>
              <span>Thống kê doanh thu</span>
            </div>
          </a>
    <?php
          }
          else {
    ?>
            <a href="#" class="thongKeDT">
              <div class="col-md-4 hvr-grow-shadow">
                <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i><br/>
                <span>Thống kê doanh thu</span>
              </div>
            </a>
    <?php
          }
        }
    ?>
    <!------>
    <a href="../hienThi/quantri.php?page=thongketonkho">
      <div class="col-md-4 hvr-grow-shadow">
          <i class="fa fa-bar-chart fa-5x" aria-hidden="true"></i><br/>
        <span>Thống kê tồn kho</span>
      </div>
    </a>
    <?php
    if (isset($_SESSION['loaiTK'])) {
      if ($_SESSION['loaiTK'] == 0) {
    ?>
    <a href="../hienThi/quantri.php?page=thongkebanchay">
      <div class="col-md-4 hvr-grow-shadow">
          <i class="fa fa-area-chart fa-5x" aria-hidden="true"></i><br/>
        <span>Sản phẩm bán chạy</span>
      </div>
    </a>
    <?php
      }
      else {
    ?>
        <a href="#" class="thongKeDT">
          <div class="col-md-4 hvr-grow-shadow">
              <i class="fa fa-area-chart fa-5x" aria-hidden="true"></i><br/>
            <span>Sản phẩm bán chạy</span>
          </div>
        </a>
    <?php
      }
    }
    ?>
  </div>
<!----------------------------------->
  <div class="col-md-6" id="qLyThongKe">
    <div class="panel  panel-gray">
      <div class="panel-heading"><span><strong>Quản lý tin bài</strong></span></div>
    </div>
    <a href="../hienThi/quantri.php?page=thembaiviet">
      <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
        <i class="fa fa-newspaper-o fa-5x" aria-hidden="true"></i><br/>
        <span>Thêm bài viết</span>
      </div>
    </a>
    <a href="../hienThi/quantri.php?page=suabaiviet">
      <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
          <i class="fa fa-pencil-square fa-5x" aria-hidden="true"></i><br/>
        <span>Sửa bài viết</span>
      </div>
    </a>
  </div>
<!----------------------------------->
<div class="col-md-6" id="qLyUser">
  <div class="panel  panel-default">
    <div class="panel-heading"><span><strong>Quản lý khách hàng</strong><span></div>
  </div>
  <a href="../hienThi/quantri.php?page=dskhachhang">
    <div class="col-md-4 col-md-push-2 hvr-grow-shadow">
      <i class="fa fa-list-ul fa-5x" aria-hidden="true"></i><br/>
      <span>Danh sách khách hàng</span>
    </div>
  </a>
</div>
<!----------------------------------->
</div>
