<?php
  include_once('xuly/__autoload.php');
 ?>
<!-- begin content -->
<section>
  <div class="container" id="tintucHeader">
    <div class="row text-left ">
    <div class="tieude_2">
      <h2>Dũng Hạnh/Tin Tức</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content_new left_new">
        <?php
          if (isset($_GET['idbv'])) {
            $idbv = $_GET['idbv'];
            $sql = "SELECT* FROM baiviet WHERE id = '$idbv'";
          }
          else {
            $sql = "SELECT* FROM baiviet ORDER BY id DESC LIMIT 1";
          }
          $baiViet = new sanpham();
          $baiViet->myQuery($sql);
          $tieuDe = $baiViet->fetchData();
         ?>
        <h3 class="title_new text-center"><?php echo $tieuDe['tieuDe']; ?></h3>
        <?php echo $tieuDe['noiDung'];
          $baiViet->freeQuery();
        ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 right_new">
        <div class="row text-center ">
          <h3 class="title_new text-center">Tin tức mới</h3>
        </div>
        <!------------------------------------>
          <?php
            $sql = "SELECT* FROM baiviet";
            $baiViet->myQuery($sql);
            while ($dsBaiViet = $baiViet->fetchData()) {
          ?>
        <!------------------------------------>
        <div class="row _1tin">
          <div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <img src="images/sp3.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              <div class="tieude">
                <a href=<?php echo "index.php?page=tintuc&idbv=".$dsBaiViet['id'];?>>
                  <p><?php echo $dsBaiViet['tieuDe']; ?><p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!----------------------------------->
        <?php
          }
        ?>
        <!--------------------------------->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row info">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="contact_col">
          <span class="fa fa-envelope-o"></span>
          <span>  info@caygiong.com</span>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="contact_col">
          <span class="fa fa-phone"></span>
          <span>  (+84) 1292007776</span>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="contact_col">
          <span>Connect us: </span>
          <span class="fa fa-facebook"> </span>
          <span class="fa fa-twitter"> </span>
          <span class="fa fa-google-plus"> </span>
          <span class="fa fa-instagram"> </span>
        </div>
      </div>
    </div>
  </div>
</section>
