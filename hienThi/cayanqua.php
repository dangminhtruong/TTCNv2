<?php
    include_once('xuly/__autoload.php');
    $phantrang = new sanpham();
    $maxResult = 12;
    $listPage = '';
    $getLink = $_SERVER['PHP_SELF'];
    if (!isset($_GET['id'])) {
      $pageId = 1;
    }
    else {
      $pageId = $_GET['id'];
    }
    $sql2 = "SELECT* FROM sanpham WHERE maLoaiSP = 1";
    $phantrang->myQuery($sql2);
    $tongKetQua = $phantrang->numRows();
    $tongSoTrang = ceil($tongKetQua/$maxResult);
    $indexRows = $pageId*$maxResult - $maxResult;
    //------------------------------------------------------------
?>
        <!---------------------CONTAINER-------------------------------->
        <div class="parallax"></div>
        <!---------------->
        <div class="container-fluid" id="cayAnQua">
          <div class="row">
            <!---->
            <div class="col-md-3 hidden-xs" id="cayAnQuaLeft1">
              <!---->
              <div class="col-md-12" id="cayAnQuaMenuTop">
                Danh mục sản phẩm
              </div>
              <!---->
              <div class="col-md-12 cayAnQuaMenu hvr-bounce-to-right">
                <a href="index.php?page=cayanqua">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  Cây ăn quả
                </a>
              </div>
              <!---->
              <div class="col-md-12 cayAnQuaMenu hvr-bounce-to-right">
                <a href="index.php?page=caylamnghiep">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  Cây lâm nghiệp
                </a>
              </div>
              <!---->
              <div class="col-md-12 cayAnQuaMenu hvr-bounce-to-right">
                <a href="index.php?page=caycongtrinh">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  Cây công trình
                </a>
              </div>
              <!---->
              <div class="col-md-12 cayAnQuaMenu hvr-bounce-to-right">
                <a href="index.php?page=hoacaycanh">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  Hoa - Cây cảnh
                </a>
              </div>
              <!---->
              <div class="col-md-12 cayAnQuaMenu hvr-bounce-to-right">
                <a href="index.php?page=vattunongnghiep">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  Vật tư nông nghiệp
                </a>
              </div>
              <!---->
              <div class="col-md-12 cayAnQuaMenu">

              </div>
              <!---->
              <div class="col-md-12" id="cayAnQuaMenuBottom">

              </div>
              <!---->
              <div class="col-md-12" id="cayAnQuaMenuMargin">

              </div>
              <div class="col-md-12" id="cayAnQuaMenuTop">
                Sản phẩm nổi bật
              </div>
              <!---->
                <?php
                $showSPNB = new database();
                $showSPNB->connectDb();
                $sql3 = "SELECT sanpham.tenSP, sanpham.giaSP, sanpham.anhSP, sanpham.maSP FROM sanpham
                WHERE (sanpham.soLuongDaBan > 0) ORDER BY sanpham.soLuongDaBan DESC LIMIT 4";
                $showSPNB->myQuery($sql3);
                if ($showSPNB->numRows() > 0) {
                while ($rowsT = $showSPNB->fetchData()) {
                ?>
              <!---->
              <div class="col-md-12 cayAnQuaMenu hvr-grow-shadow">
                <div class="col-md-4 row">
                    <img src=<?php echo 'images/'.$rowsT['anhSP'] ?> class="img-responsive" alt="Cinque Terre" style="	max-height: inherit;"/>
                </div>
                <div class="col-md-8">
                  <?php echo $rowsT['tenSP'] ?><br/>
                  <i class="fa fa-heart vote" aria-hidden="true" style="font-size:10px;"></i>
                  <i class="fa fa-heart vote " aria-hidden="true"  style="font-size:10px;"></i>
                  <i class="fa fa-heart vote" aria-hidden="true"  style="font-size:10px;"></i>
                  <i class="fa fa-heart vote" aria-hidden="true"  style="font-size:10px;"></i>
                  <i class="fa fa-heart-o vote" aria-hidden="true"  style="font-size:10px;"></i>
                </div>
              </div>
              <?php
                  }
                }
              ?>
              <div class="col-md-12 hvr-grow-shadow" id="cayAnQuaMenuBottom2">
                Xem thêm...
              </div>
              <!---->
            </div>


            <!------------------PHAI --------------------------------------------->
            <div class="col-md-9 row" id="cayAnQuaRight1">
            <!--------------------------------------------------------------->
              <div class="col-md-12">
                <div class="col-md-12" id="thanhSapXep">
                  <p data-toggle="dropdown" href="#">Sắp xếp theo <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i><span class="caret"></span></p>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="#">Gía tăng dần</a></li>
                    <li><a href="#">Giá giảm dần</a></li>
                  </ul>
                </div>
              </div>
              <!-------------------------------------------------------------->
                <?php
                $sql1 = "SELECT* FROM sanpham WHERE maLoaiSP = 1 LIMIT $maxResult OFFSET $indexRows";
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
               ?>
            <!------------------------------------------------------------------------------>
            <div class="col-md-12">
              <ul class="pagination">
                <?php
                if ($pageId > 1) {
                  echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page=cayanqua&id='.($i-1).'">'.'&laquo;'.'</a></li>';
                }
                  for ($i=1; $i <= $tongSoTrang; $i++) {
                    if ($pageId == $i) {
                        echo '<li><a href="#"><strong>'.$i.'</strong></a></li>';
                    }
                    else {
                        echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page=cayanqua&id='.$i.'">'.$i.'</a></li>';
                    }
                  }
                  if ($pageId < $tongSoTrang) {
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page=cayanqua&id='.($i-1).'">'.'&raquo;'.'</a></li>';
                  }
                 ?>
              </ul>
            </div>
          </div>
          <!------------------------------------------------------------------------------>
        </div>
      </div>
        <!------------------------------------------------------------------------------>
