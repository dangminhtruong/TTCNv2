<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$dauTuan = date("Y-m-d", strtotime("monday this week"));
$cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
$dauThang = date("Y-m-d", strtotime("first day of this month"));
$cuoiThang = date("Y-m-d", strtotime("last day of this month"));
$homNay =  date('Y/m/d');
?>
<div class="col-md-10" id="qtriRight">
    <div class="col-md-12 well">
        <strong>Thống kê sản phẩn bán chạy</strong>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="col-md-12 well">
              <strong>Hôm nay</strong>
            </div>
            <div class="col-md-12 tkspBanChay">
              <table class="table table-hover">
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT chitietdonhang.masp, sum(soluong) as 'brmsp',tensp FROM chitietdonhang INNER JOIN sanpham ON (chitietdonhang.masp = sanpham.masp)
                          WHERE chitietdonhang.madh IN (SELECT donhang.madh FROM donhang WHERE ngaydathang BETWEEN '$homNay' AND '$homNay')
                          GROUP BY chitietdonhang.masp
                          ORDER BY brmsp DESC";
                          $showHn = new sanpham();
                          $showHn->myQuery($sql);
                          while ($kqhn = $showHn->fetchData()) {
                  ?>
                      <tr>
                        <td><?php echo $kqhn['tensp']; ?></td>
                        <td><?php echo $kqhn['brmsp'] ?></td>
                      </tr>
                  <?php
                      }
                      $showHn->freeQuery();
                  ?>
                </tbody>
              </table>
            </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-12 well">
            <strong>Tuần này</strong>
          </div>
          <div class="col-md-12 tkspBanChay">
            <table class="table table-hover">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql2 = "SELECT chitietdonhang.masp, sum(soluong) as 'brmsp',tensp FROM chitietdonhang INNER JOIN sanpham ON (chitietdonhang.masp = sanpham.masp)
                        WHERE chitietdonhang.madh IN (SELECT donhang.madh FROM donhang WHERE ngaydathang BETWEEN '$dauTuan' AND '$cuoiTuan')
                        GROUP BY chitietdonhang.masp
                        ORDER BY brmsp DESC";
                        $showHn->myQuery($sql2);
                        while ($kqhn = $showHn->fetchData()) {
                ?>
                    <tr>
                      <td><?php echo $kqhn['tensp']; ?></td>
                      <td><?php echo $kqhn['brmsp'] ?></td>
                    </tr>
                <?php
                    }
                    $showHn->freeQuery();
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-12 well">
            <strong>Tháng này</strong>
          </div>
          <div class="col-md-12 tkspBanChay">
            <table class="table table-hover">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql3 = "SELECT chitietdonhang.masp, sum(soluong) as 'brmsp',tensp FROM chitietdonhang INNER JOIN sanpham ON (chitietdonhang.masp = sanpham.masp)
                        WHERE chitietdonhang.madh IN (SELECT donhang.madh FROM donhang WHERE ngaydathang BETWEEN '$dauThang' AND '$cuoiThang')
                        GROUP BY chitietdonhang.masp
                        ORDER BY brmsp DESC";
                        $showHn->myQuery($sql3);
                        while ($kqhn = $showHn->fetchData()) {
                ?>
                    <tr>
                      <td><?php echo $kqhn['tensp']; ?></td>
                      <td><?php echo $kqhn['brmsp'] ?></td>
                    </tr>
                <?php
                    }
                    $showHn->freeQuery();
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
<!-------------------------------------->
