  <!------------------------->
    <?php
      include_once('__autoload.php');
      $sql = "SELECT * FROM khachhang WHERE loaiKH = 1";
      $danhSach = new sanpham();
      $danhSach->myQuery($sql);
      while ($rows = $danhSach->fetchData()) {
    ?>
  <!------------------------->
  <div class="col-md-12 khachQuen">
    <div class="col-md-2">
        <?php echo $rows['tenKH'] ;?>
    </div>
    <div class="col-md-4">
        <?php echo $rows['diaChi']; ?>
    </div>
    <div class="col-md-2">
        <?php echo $rows['soDT'];?>
    </div>
    <div class="col-md-3">
        <?php echo $rows['email'];?>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn-xs btn-danger suaKQ" <?php echo "value=".$rows['maKH']; ?>>
          Sửa</button>
    </div>
  </div>
  <?php
    }
  ?>
