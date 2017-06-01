<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
include_once('../xuly/__autoload.php');
$homNay =  date('Y/m/d');
$dauTuan = date("Y-m-d", strtotime("monday this week"));
$cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
$dauThang = date("Y-m-d", strtotime("first day of this month"));
$cuoiThang = date("Y-m-d", strtotime("last day of this month"));
?>
<div class="col-md-10" id="qtriRight">
    <div class="col-md-12 well">
        <strong>Thống kê doanh thu</strong>
    </div>
    <div class="col-md-12">
        <canvas id="line-chart"></canvas>
    </div>
    <div class="col-md-12" id="thongKeChiTiet">
      <!------------------------------------------------------------------------------------->
        <div class="col-md-4">
              <div class="col-md-12 well">
                  <strong>Hôm nay</strong>
              </div>
              <div class="col-md-12">
                  <div class="col-md-12 tkChiTiet">
                    <?php
                     $sql0 = "SELECT sum(chitietdonhang.soluong) as 'spbanrahn' FROM chitietdonhang
                     INNER JOIN donhang ON (chitietdonhang.madh = donhang.madh)
                     WHERE donhang.ngaydathang = '$homNay'";
                     $spbr = new sanpham();
                     $spbr->myQuery($sql0);
                     $res =  $spbr->fetchData();
                    ?>
                      Số sản phẩm bán ra : <span class="mark"><?php echo $res['spbanrahn']; ?></span>
                  </div>
                  <div class="col-md-12 tkChiTiet">
                      <?php
                          $sql1 = "SELECT count(donhang.madh) as 'sldhhn' FROM donhang
                          WHERE donhang.ngaydathang = '$homNay'";
                          $spbr->myQuery($sql1);
                          $res =  $spbr->fetchData();
                       ?>
                      Số lượng đơn đặt hàng : <span class="mark"><?php echo $res['sldhhn']; ?></span>
                  </div>
                  <div class="col-md-12 tkChiTiet">
                      <?php
                          $sql2 = "SELECT sum(donhang.tongthanhtoan) as 'tongtthn' FROM donhang
                          WHERE donhang.ngaydathang = '$homNay' ";
                          $spbr->myQuery($sql2);
                          $res =  $spbr->fetchData();
                       ?>
                      Tổng doanh thu : <span class="mark"><?php echo $res['tongtthn']; ?><u>đ</u></span>
                  </div>
              </div>
        </div>
      <!------------------------------------------------------------------------------------->
        <div class="col-md-4">
              <div class="col-md-12 well">
                  <strong>Tuần Này</strong>
              </div>
              <div class="col-md-12">
                  <div class="col-md-12 tkChiTiet">
                    <!---------------------------------------------->
                    <?php
                      $sql3 = "SELECT sum(chitietdonhang.soluong) as 'spbanra' FROM chitietdonhang
                      INNER JOIN donhang ON (chitietdonhang.madh = donhang.madh)
                      WHERE donhang.ngaydathang BETWEEN '$dauTuan' AND '$cuoiTuan'";
                      $spbr->myQuery($sql3);
                      $res =  $spbr->fetchData();
                    ?>
                    <!---------------------------------------------->
                      Số sản phẩm bán ra : <span class="mark"><?php echo $res['spbanra']; ?></span>
                  </div>
                  <div class="col-md-12 tkChiTiet">
                      <!-------------------------------------------->
                      <?php
                      $sql4 = "SELECT count(donhang.madh) as 'sldh' FROM donhang
                      WHERE donhang.ngaydathang BETWEEN '$dauTuan' AND '$cuoiTuan'";
                      $spbr->myQuery($sql4);
                      $res =  $spbr->fetchData();
                      ?>
                      <!-------------------------------------------->
                      Số lượng đơn đặt hàng : <span class="mark"><?php echo $res['sldh']; ?></span>
                  </div>
                  <div class="col-md-12 tkChiTiet">
                      <?php
                        $sql5 = "SELECT sum(donhang.tongthanhtoan) as 'tongtt' FROM donhang
                        WHERE donhang.ngaydathang BETWEEN '$dauTuan' AND '$cuoiTuan'";
                        $spbr->myQuery($sql5);
                        $res =  $spbr->fetchData();
                       ?>
                      Tổng doanh thu : <span class="mark"><?php echo $res['tongtt']; ?><u>đ</u></span>
                  </div>
              </div>
        </div>
        <!------------------------------------------------------------------------------------->
        <div class="col-md-4">
              <div class="col-md-12 well">
                 <strong>Tháng này</strong>
              </div>
              <div class="col-md-12">
                  <div class="col-md-12 tkChiTiet">
                      <?php
                        $sql6 = "SELECT sum(chitietdonhang.soluong) as 'spbanratn' FROM chitietdonhang
                        INNER JOIN donhang ON (chitietdonhang.madh = donhang.madh)
                        WHERE donhang.ngaydathang BETWEEN '$dauThang' AND '$cuoiThang'";
                        $spbr->myQuery($sql6);
                        $res =  $spbr->fetchData();
                      ?>
                      Số sản phẩm bán ra : <span class="mark"><?php echo $res['spbanratn']; ?></span>
                  </div>
                  <div class="col-md-12 tkChiTiet">
                    <?php
                      $sql7 = "SELECT count(donhang.madh) as 'sldhtn' FROM donhang
                      WHERE donhang.ngaydathang BETWEEN '$dauThang' AND '$cuoiThang'";
                      $spbr->myQuery($sql7);
                      $res =  $spbr->fetchData();
                    ?>
                      Số lượng đơn đặt hàng : <span class="mark"><?php echo $res['sldhtn']; ?></span>
                  </div>
                  <div class="col-md-12 tkChiTiet">
                    <?php
                      $sql8 = "SELECT sum(donhang.tongthanhtoan) as 'tongtttn' FROM donhang
                      WHERE donhang.ngaydathang BETWEEN '$dauThang' AND '$cuoiThang'";
                      $spbr->myQuery($sql8);
                      $res =  $spbr->fetchData();
                     ?>
                      Tổng doanh thu : <span class="mark"><?php echo $res['tongtttn']; ?><u>đ</u></span>
                  </div>
                  <!--div class="col-md-12" style="text-align:left;">
                      <button type="button" class="btn btn-default btn-block" name="button"><strong>Xem biểu đồ tháng</strong></button>
                  </div-->
              </div>
        </div>
        <!------------------------------------------------------------------------------------->
    </div>
</div>
<!-------------------------------------->
