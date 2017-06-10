<?php
  include_once('__autoload.php');
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
