<?php
    include_once('xuly/__autoload.php');
    $idsp = $_GET['idsp'];
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
              <!-------------------------------------------------------------->
                <?php
                $sql1 = "SELECT sanpham.maSP,sanpham.tenSP,sanpham.soLuongSP, sanpham.giaSP,sanpham.moTaSP,sanpham.anhSP, loaisanpham.tenLoaiSP, loaisanpham.maLoaiSP
                FROM sanpham INNER JOIN loaisanpham ON (sanpham.maLoaiSP = loaisanpham.maLoaiSP) WHERE masp = '$idsp'";
                $cayAnQua = new sanpham();
                $cayAnQua->myQuery($sql1);
                while ($cayAQ = $cayAnQua->fetchData()) {
                ?>
              <!-------------------------------------------------------------->
                <div class="col-md-12 space">
                  <div class="col-md-4 sanpham wow bounceInUp" data-wow-duration="2s">
                      <div class="col-md-12" id="spMoiContent">
                        <img src=<?php echo "images/".$cayAQ['anhSP'] ?> class="img-responsive" alt="Cinque Terre">
                      </div>
                      <div class="col-md-12" style="text-align:center; padding-top:2vh; padding-bottom:2vh;background-color:white;">
                        <button class="buttonDatMua button_orange" <?php echo "value=".$cayAQ['maSP'] ?>>Đặt mua</button>
                      </div>
                  </div>
                  <div class="col-md-8 sanpham thongTinSanPham">
                      <div class="col-md-4 motThongTinSp hvr-bounce-to-right">
                          Tên sản phẩm :
                      </div>
                      <div class="col-md-8 motThongTinSp">
                          <?php echo $cayAQ['tenSP'] ?>
                      </div>
                      <div class="col-md-4 motThongTinSp hvr-bounce-to-right">
                          Giá sản phẩm :
                      </div>
                      <div class="col-md-8 motThongTinSp">
                          <?php echo $cayAQ['giaSP'] ?><u>đ</u>
                      </div>
                      <div class="col-md-4 motThongTinSp hvr-bounce-to-right">
                          Loại sản phẩm :
                      </div>
                      <div class="col-md-8 motThongTinSp">
                          <?php echo $cayAQ['tenLoaiSP'] ?>
                      </div>
                      <div class="col-md-4 motThongTinSp hvr-bounce-to-right">
                          Tình trạng :
                      </div>
                      <div class="col-md-8 motThongTinSp">
                          <?php
                            if ($cayAQ['soLuongSP'] > 0) {
                                echo "Còn hàng";
                            }
                            else {
                              echo "Hết hàng";
                            }
                          ?>
                      </div>
                      <div class="col-md-4 motThongTinSp hvr-bounce-to-right">
                          Mô tả :
                      </div>
                      <div class="col-md-8 motThongTinSp">
                          <?php echo $cayAQ['moTaSP'];?>
                      </div>
                  </div>
                </div>
              <?php
                      $loaiSpLienQuan = $cayAQ['maLoaiSP'];
                    }
               ?>
            <!------------------------------------------------------------------------------>
            <div class="col-md-12 sanPhamLienQuan">
                  <?php
                    $sql2 = "SELECT* FROM sanpham WHERE maLoaiSP = '$loaiSpLienQuan' ORDER BY RAND() LIMIT 3";
                    $cayAnQua->myQuery($sql2);
                    while ($spLienQuan = $cayAnQua->fetchData()) {
                  ?>
                  <div class="col-md-4">
                    <div class="col-md-12" id="spMoiContent">
                      <a <?php echo "href=index.php?page=chitietsanpham&idsp=".$spLienQuan['maSP'];?> target="_blank">
                        <img src=<?php echo "images/".$spLienQuan['anhSP'] ?> class="img-responsive" alt="Cinque Terre">
                      </a>
                    </div>
                    <div class="col-md-12 text-center" id="price">
                      <span style="font-family: 'Lobster', cursive; color:#33cc00;">
                        <?php echo $spLienQuan['tenSP'] ?>
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
                      <button class="buttonDatMua button_orange" <?php echo "value=".$spLienQuan['maSP'] ?>>Đặt mua</button>
                    </div>
                    <div class="col-md-12" style="text-align:center; padding-top: 2vh; padding-bottom:2vh; background-color:white;">
                      <span style="font-family: 'Fjalla One', sans-serif;">
                        <?php echo $spLienQuan['giaSP'] ?><u>đ</u>
                      </span>
                    </div>
                  </div>
                  <?php
                      }
                  ?>
            </div>
            <!------------------------------->
          </div>
          <!------------------------------------------------------------------------------>
        </div>
      </div>
        <!------------------------------------------------------------------------------>
