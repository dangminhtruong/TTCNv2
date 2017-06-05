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
        <div class="col-md-12 tkspBanChay" id="hienThiDonHang">
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
                  $date1=date_create($homNay);
                  $date2=date_create($ngayNhap);
                  $diff=date_diff($date2,$date1);
                  echo "Cách đây ".$diff->format("%a ngày");
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
    </div>
</div>
<!-------------------------------------->
