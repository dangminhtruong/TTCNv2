
        <!------------------------------------------------------------------------------>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="item active">
                       <img src="images/slide9.jpg" alt="First slide">
                   </div>
                   <div class="item">
                       <img src="images/slide16.jpg" alt="Second slide">
                   </div>
                   <div class="item">
                       <img src="images/slide18.jpg" alt="Third slide">
                   </div>
               </div>
           </div>
           <div class="main-text hidden-xs">
               <div class="col-md-12 text-center">
                   <h1 id="logoText">
                      Dũng Hạnh
                   </h1>
                   <h3 class="wow bounceInRight flash" data-wow-duration = "3s" id="shortCap">
                       Chuyên cung cấp các loại giống cây trồng các loại <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                   </h3>
                   <div class="">
                       <span class="btn btn-clear btn-sm btn-min-block wow flash slbt" data-wow-delay="2s">Uy tín</span>
                       <span class="btn btn-clear btn-sm btn-min-block wow flash slbt" data-wow-delay="3s">Chất lượng</span>
                       <span class="btn btn-clear btn-sm btn-min-block wow flash slbt" data-wow-delay="4s">Đa dạng</span>
                  </div>
               </div>
           </div>

<!----------------HET SILDE SHOW----------------------------------------------->

<!----------------SLOGAN------------------------------------------------------->
        <div class="container-fluid" id="sloganTrangChu">
              <div class="col-md-3 col-xs-12 col-md-offset-1 hvr-underline-from-left" id="sloganTrangChu2Content">
                <i class="fa fa-thumbs-o-up fa-4x" style="color:green;"></i>
                <p id="sloganTrangChuTieuDe">Cam kết chất lượng</p>
                <p style="font-family: font_Buttermilk; ">Nhà vườn chùng tôi cam kết mang đến những loại giống cây
                  đảm bảo chất lượng với số lượng từ lớn đến nhỏ lẻ.</p>
              </div>
              <div class="col-md-3 col-xs-12 col-md-offset-1 hvr-underline-from-left" id="sloganTrangChu2Content">
                <i class="fa fa-pagelines fa-4x" style="color:green;"></i>
                <p id="sloganTrangChuTieuDe">Giống cây da dạng</p>
                <p style="font-family: font_Buttermilk; ">Với gần 200 loại giống cây đủ mọi chủng loại.
                    Từ cây lâm nghiệp, cây công trình đến giống hoa màu và cây cảnh
                    Chúng tôi luôn mang đến sự đa dạng về lựa chọn cho khách hàng.
                </p>
              </div>
              <div class="col-md-3 col-xs-12 col-md-offset-1 hvr-underline-from-left" id="sloganTrangChu2Content">
                <i class="fa fa-leaf fa-4x" style="color:green;"></i>
                <p id="sloganTrangChuTieuDe">Hỗ trợ gieo trồng</p>
                <p style="font-family: font_Buttermilk; ">Hơn <strong>20 năm</strong> ươm trồng giống cây các loại,
                    chúng tôi luôn vui lòng chia sẻ và hỗ trợ kinh nghiệm
                    chăm bón các loại cây trồng.
                </p>
              </div>
        </div>
<!----------------------END SLOGAN---------------------------------------------->
<!-------------------------------SAN PHAM MOI----------------------------------->
        <div class="container-fluid" id="spmoi">
            <div class="col-md-12" style="text-align:center; padding-bottom:1%;">
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
            </div>
            <div class="col-md-12 text-center">
              <p style="font-family: 'Lobster', cursive; font-size:25px; color:#33cc00;">Sản phẩm mới</p>
              <p>
                <i class="fa fa-fighter-jet fa-rotate-180" aria-hidden="true"></i>
                 <span style="font-family: 'Lobster', cursive; font-size:18px;"> Giống cây nhà vườn vừa ươm thành công </span>
                <i class="fa fa-fighter-jet" aria-hidden="true"></i>
              </p>
            </div>
        </div>
<!----------------------------------------------------------------------------->
        <div class="container-fluid row">
            <!-------HIEN THI 4 SAN PHAM MOI------>
            <?php
                include_once('xuly/__autoload.php');
                $showSPM = new database();
                $showSPM->connectDb();
                $sql1 = "SELECT* FROM sanpham";
                $showSPM->myQuery($sql1);
                $sql2 = "SELECT * FROM sanpham ORDER BY maSP DESC LIMIT 4";
                $showSPM->myQuery($sql2);
                if ($showSPM->numRows() > 0) {
                  while ($rows = $showSPM->fetchData()) {
            ?>
            <div class="col-md-3 col-sm-12 khoiSanPham">
                <div class="col-md-12" id="spMoiContent">
                  <a <?php echo "href=index.php?page=chitietsanpham&idsp=".$rows['maSP'];?> target="_blank">
                    <img src=<?php echo "images/".$rows['anhSP'] ?> class="img-responsive" alt="Cinque Terre">
                  </a>
                </div>
                <div class="col-md-12 text-center" id="price">
                  <span style="font-family: 'Lobster', cursive; color:#33cc00;background-color:white;">
                    <?php echo $rows['tenSP'] ?>
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
                    <button class="buttonDatMua button_orange" <?php echo "value=".$rows['maSP'] ?>>Đặt mua</button>
                  </div>
                  <div class="col-md-12" style="text-align:center; padding-top: 2vh; padding-bottom:2vh; background-color:white;">
                    <span style="font-family: 'Fjalla One', sans-serif;">
                      <?php echo $rows['giaSP'] ?><u> đ</u>
                    </span>
                  </div>
            </div>
            <?php
                }
              }
              $showSPM->freeQuery();
              $showSPM->disconnectDb();
            ?>
        </div>

<!-------------------------------END SAN PHAM MOI------------------------------->
<!-------------------------------SLOGAN 2--------------------------------------->
      <div id="sloganTrangChu2" class="container-fluid">

        <!------Gio Lam Viec----->
        <div class="col-md-4 col-xs-12 col-sm-4 wow bounceInLeft" data-wow-duration="1s" id="giolamviec">
          <div class="col-md-12 col-xs-12 col-sm-12 rounded1">
            <p>
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              <span>Giờ làm việc</span>
            </p>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-12" id="gioLamViecContent">
            <p>
              6AM - 6PM hằng ngày.<br/>
              Trừ dịp lễ tết.
                <hr class="hrStyle2"/><br/>
            </p>
          </div>
        </div>
        <!------------------------>
        <!---------Ho tro truc tuyen---------->
        <div class="col-md-4 col-xs-12 col-sm-4 wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.5s"  id="giolamviec">
          <div class="col-md-12 col-xs-12 col-sm-12 rounded1">
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
              Hỗ trợ trực tuyến
            </p>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-12" id="gioLamViecContent">
            <p>
              01292007776<br/><br/>
              <hr class="hrStyle2"/><br/>
              Gọi ngay cho nhà vườn chúng tôi để nhận tư vấn chăm bón trực tiếp hoặc đặt hàng.
            </p>
          </div>
        </div>
        <!---------------------------->
        <!-------Dia chi chi tiet----->
        <div class="col-md-4 col-xs-12 col-sm-4 wow bounceInRight" data-wow-duration="1s"   id="giolamviec">
          <div class="col-md-12 col-xs-12 col-sm-12 rounded1">
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Địa chỉ chi tiết
            </p>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-12" id="gioLamViecContent">
            <p>
              Nhà vườn Dũng hạn<br/>
              Số 4 đường Học Viện Nông Nghiệp Việt Nam.
                <hr class="hrStyle2"/><br/>
                Xem chỉ đường Google Map tại <a href="#">đây</a>
            </p>
          </div>
        </div>
        <!---------------------------->
      </div>
<!----------------------------END SLOGAN 2-------------------------------------------------->
<!----------------------------SAN PHAM BAN CHAY-------------------------------------------->
      <div class="container-fluid" id="spmoi">
          <div class="col-md-12" style="text-align:center; padding-bottom:1%;">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
          </div>
          <div class="col-md-12 text-center">
            <p style="font-family: 'Lobster', cursive; font-size:25px; color:#33cc00;">Sản phẩm bán chạy</p>
            <p>
              <i class="fa fa-fighter-jet fa-rotate-180" aria-hidden="true"></i>
               <i style="font-family: 'Lobster', cursive; font-size:18px;"> Sản phẩm được quan tâm nhiều nhất thời gian qua
                 của nhà vườn.
              </i>
              <i class="fa fa-fighter-jet" aria-hidden="true"></i>
            </p>
          </div>
      </div>
      <!--------------------------------->
      <div class="container-fluid row">
          <?php
              $showSPBC = new database();
              $showSPBC->connectDb();
              $sql3 = "SELECT sanpham.tenSP, sanpham.giaSP, sanpham.anhSP, sanpham.maSP FROM sanpham
              WHERE (sanpham.soLuongDaBan > 0) ORDER BY sanpham.soLuongDaBan DESC LIMIT 4";
              $showSPBC->myQuery($sql3);
              if ($showSPBC->numRows() > 0) {
              while ($rowsT = $showSPBC->fetchData()) {
          ?>
          <div class="col-md-3 col-sm-12">
              <div class="col-md-12" id="spMoiContent">
                <a <?php echo "href=index.php?page=chitietsanpham&idsp=".$rowsT['maSP'];?> target="_blank">
                  <img src=<?php echo "images/".$rowsT['anhSP'];?> class="img-responsive" alt="Cinque Terre" style=" max-height: inherit;">
                </a>
              </div>
              <div class="col-md-12 text-center" id="price">
                <span style="font-family: 'Lobster', cursive; color:#33cc00;background-color:white;">
                  <?php echo $rowsT['tenSP'] ?>
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
                  <button class="buttonDatMua button_orange" <?php echo "value=".$rowsT['maSP'] ?> >
                    Đặt mua
                  </button>
                </div>
                <div class="col-md-12" style="text-align:center; padding-top: 2vh; padding-bottom:2vh; background-color:white;">
                  <span style="font-family: 'Fjalla One', sans-serif;">
                    <?php echo $rowsT['giaSP']; ?><u> đ</u>
                  </span>
                </div>
          </div>
          <?php
              }
            }
          ?>
      </div>
<!---------------------------END SAN PHAM BAN CHAY---------------------------------------->
<!-----------------------------------BAI VIET------------------------------>
      <div class="container-fluid" id="spmoi">
          <div class="col-md-12" style="text-align:center; padding-bottom:1%;">
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                  <i class="fa fa-snowflake-o" aria-hidden="true"></i>
          </div>
          <div class="col-md-12 text-center">
            <p style="font-family: 'Lobster', cursive; font-size:25px; color:#33cc00;">Bài viết nổi bật</p>
            <p>
              <i class="fa fa-fighter-jet fa-rotate-180" aria-hidden="true"></i>
               <i style="font-family: 'Lobster', cursive; font-size:18px;"> Một số bài viết hướng dẫn, mẹo chăm bón cây trồng.
              </i>
              <i class="fa fa-fighter-jet" aria-hidden="true"></i>
            </p>
          </div>
      </div>
<!-----------------------------------END BAI VIET------------------------------>
<!---------------------------BAI VIET----------------------------------------------------->
      <div class="container-fluid row" id="baiViet">
        <?php
          $sql4 = "SELECT* FROM baiviet LIMIT 4";
          $baiViet = new sanpham();
          $baiViet->myQuery($sql4);
          while ($bv = $baiViet->fetchData() ) {
       ?>
       <div class="col-md-3 container1 wow bounceInLeft">
         <img src="images/sp3.jpg" alt="anhbv" class="imagebv" style="width:100%">
         <a href=<?php echo "/TTCNv2/index.php?page=tintuc&idbv=".$bv['id'];?>>
           <div class="middle">
             <div class="text">Xem Thêm</div>
           </div>
         </a>
         <div class="tieudebv">
           <p>
             <?php echo $bv['tieuDe'];?>
           <p>
         </div>
       </div>
       <?php
          }
        ?>
      </div>
<!---------------------------END BAI VIET------------------------------------------------->
<!---------------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------->
