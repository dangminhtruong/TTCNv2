<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $homNay =  date('Y/m/d');
?>
<div class="col-md-10" id="qtriRight">
    <div class="col-md-12 well">
        <strong>Thống kê tồn kho</strong>
    </div>
    <div class="col-md-12">
        <div class="col-md-12">
          <div class="col-md-3 colInXdh">
              Tên sản phẩm
          </div>
            <div class="col-md-3 colInXdh1">
                Ngày nhập
            </div>
            <div class="col-md-3 colInXdh1">
                Số lượng còn
            </div>
            <div class="col-md-3 colInXdh">
                Số đã bán
            </div>
        </div>
        <div class="col-md-12 tkspBanChay" id="hienThiTonKho">
          <?php
            $sql = "SELECT tensp,ngayNhap,soluongdaban, soLuongSp FROM sanpham
            ORDER BY ngayNhap";
            $spTonKho = new sanpham();
            $spTonKho->myQuery($sql);
            if ($spTonKho->numRows() > 0) {
              while ($sp = $spTonKho->fetchData()) {
          ?>
            <div class="container-fluid sanPhamTonKho">
                <div class="col-md-3">
                    <?php echo $sp['tensp'];?>
                </div>
                <div class="col-md-3">
                  <?php
                  $ngayNhap = $sp['ngayNhap'];
                  $date=date_create($ngayNhap);
                  echo date_format($date,"d-m-Y");
                  ?>
                </div>
                <div class="col-md-3">
                    <?php echo $sp['soLuongSp'];?>
                </div>
                <div class="col-md-3">
                    <?php echo $sp['soluongdaban'];?>
                </div>
            </div>
          <?php
              }
            }
          ?>
        </div>
        <div class="col-md-12" id="locTonKho">
              <button type="button" class="btn btn-info" id="xemTonKhoTongQuat">Tổng quan</button>
              <button type="button" class="btn btn-default" id="xemSpSapHet">Sản phẩm gần hết</button>
              <button type="button" class="btn btn-default" id="xemSpDaHet">Sản phẩm đã hết</button>
        </div>
    </div>
</div>
<!-------------------------------------->
