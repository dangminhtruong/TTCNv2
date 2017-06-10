<?php
  include_once('__autoload.php');
  if (isset($_POST['sapXepTang'])) {
    $maxResult = $_POST['maxRes'];
    $indexRows = $_POST['indexRow'];
    $loaiSP = $_POST['loaiSP'];
    $sql1 = "SELECT* FROM sanpham WHERE maLoaiSP = '$loaiSP' ORDER BY giasp LIMIT $maxResult OFFSET $indexRows ";
    $cayAnQua = new sanpham();
    $cayAnQua->myQuery($sql1);
    while ($cayAQ = $cayAnQua->fetchData()) {
    ?>
  <!-------------------------------------------------------------->
    <div class="col-md-4 sanpham wow bounceInUp" data-wow-duration="2s">
        <div class="col-md-12" id="spMoiContent">
          <a <?php echo "href=index.php?page=chitietsanpham&idsp=".$cayAQ['maSP'];?> target="_blank">
            <img src=<?php echo "images/".$cayAQ['anhSP'] ?> class="img-responsive" alt="Cinque Terre">
          </a>
        </div>
        <div class="col-md-12 text-center" id="price">
          <span style="font-family: 'Lobster', cursive; color:#33cc00;">
            <?php echo $cayAQ['tenSP'] ?>
          </span>
        </div>
        <div class="col-md-12" style="text-align:center;background-color:white;">
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart-o" aria-hidden="true"></i>
        </div>
        <div class="col-md-12" style="text-align:center; padding-top:2vh; padding-bottom:2vh;background-color:white;">
          <button class="buttonDatMua button_orange" <?php echo "value=".$cayAQ['maSP'] ?>>Đặt mua</button>
        </div>
        <div class="col-md-12" style="text-align:center; padding-top: 2vh; padding-bottom:2vh; background-color:white;">
          <span style="font-family: 'Fjalla One', sans-serif;">
            <?php echo $cayAQ['giaSP'] ?><u>đ</u>
          </span>
        </div>
    </div>
  <?php
        }
  }
  //----------------------------------------------------
  elseif (isset($_POST['sapXepGiam'])) {
    $maxResult = $_POST['maxRes'];
    $indexRows = $_POST['indexRow'];
    $loaiSP = $_POST['loaiSP'];
    $sql1 = "SELECT* FROM sanpham WHERE maLoaiSP = '$loaiSP' ORDER BY giasp DESC LIMIT $maxResult OFFSET $indexRows ";
    $cayAnQua = new sanpham();
    $cayAnQua->myQuery($sql1);
    while ($cayAQ = $cayAnQua->fetchData()) {
    ?>
  <!-------------------------------------------------------------->
    <div class="col-md-4 sanpham wow bounceInUp" data-wow-duration="2s">
        <div class="col-md-12" id="spMoiContent">
          <a <?php echo "href=index.php?page=chitietsanpham&idsp=".$cayAQ['maSP'];?> target="_blank">
            <img src=<?php echo "images/".$cayAQ['anhSP'] ?> class="img-responsive" alt="Cinque Terre">
          </a>
        </div>
        <div class="col-md-12 text-center" id="price">
          <span style="font-family: 'Lobster', cursive; color:#33cc00;">
            <?php echo $cayAQ['tenSP'] ?>
          </span>
        </div>
        <div class="col-md-12" style="text-align:center;background-color:white;">
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-heart-o" aria-hidden="true"></i>
        </div>
        <div class="col-md-12" style="text-align:center; padding-top:2vh; padding-bottom:2vh;background-color:white;">
          <button class="buttonDatMua button_orange" <?php echo "value=".$cayAQ['maSP'] ?>>Đặt mua</button>
        </div>
        <div class="col-md-12" style="text-align:center; padding-top: 2vh; padding-bottom:2vh; background-color:white;">
          <span style="font-family: 'Fjalla One', sans-serif;">
            <?php echo $cayAQ['giaSP'] ?><u>đ</u>
          </span>
        </div>
    </div>
  <?php
        }
  }
?>
