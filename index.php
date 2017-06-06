<?php
  session_start();
  ob_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dung Hanh</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  </head>
  <body>
    <!----------------------------------------------------------------------------->
    <div class="container-fluid">
      <div class="row">
        <!-----------NAVIGATION BAR------------------->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button_datMua type="button_datMua" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button_datMua>
              <a class="navbar-brand" id="DungHanhBrand" href="#">Dũng Hạnh</a>
            </div>
            <!------>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbarLeft">
                <li><a href="index.php?page=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page=gioithieu">Giới thiệu</a></li>
                <li>
                    <a data-toggle="dropdown" href="index.php?page=sanpham">Sản phẩm<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                      <li><a href="index.php?page=cayanqua">Cây ăn quả</a></li>
                      <li><a href="index.php?page=caylamnghiep">Cây lâm nghiệp</a></li>
                      <li><a href="index.php?page=caycongtrinh">Cây công trình</a></li>
                      <li><a href="index.php?page=hoacaycanh">Hoa - Cây cảnh</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=tintuc">Tin tức</a></li>
                <li><a href="index.php?page=lienhe">Liên hệ</a></li>
                <?php
                  if (isset($_SESSION['muaHang']) && $_SESSION['muaHang'] != 0) { ?>
                    <li>
                      <a href="index.php?page=thanhtoan" class="glyphicon glyphicon-shopping-cart shake" id="giohang" style="color:yellow"><sup id="sluong"><?php echo $_SESSION['muaHang']; ?></sup></a>
                  <?php
                    }
                    else { ?>
                      <li><a href="index.php?page=thanhtoan" class="glyphicon glyphicon-shopping-cart shake" id="giohang"><sup id="sluong">0</sup></a>
                  <?php
                    }
                  ?>
                </li>
              </ul>
            </div>
            <!-------->
          </div>
        </nav>
        <!-----------END NAVIGATION BAR---------------->

           <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                  //----------------------------
                  case 'trangchu':
                    include_once("hienThi/trangchu.php");
                    break;
                  //----------------------------
                  case 'gioithieu':
                    include_once("hienThi/gioithieu.php");
                    break;
                  //---------------------------
                  case 'sanpham':
                    include_once("hienThi/sanpham.php");
                    break;
                //----------------------------
                  case 'cayanqua':
                    include_once("hienThi/cayanqua.php");
                    break;
               //----------------------------
                  case 'caylamnghiep':
                    include_once("hienThi/caylamnghiep.php");
                    break;
               //----------------------------
                 case 'tintuc':
                   include_once("hienThi/tintuc.php");
                   break;
               //---------------------------
                 case 'lienhe':
                   include_once("hienThi/lienhe.php");
                   break;
               //---------------------------
                case 'caycongtrinh':
                    include_once("hienThi/caycongtrinh.php");
                    break;
               //----------------------------
                case 'hoacaycanh':
                    include_once("hienThi/hoacaycanh.php");
                    break;
              //----------------------------
                case 'vattunongnghiep':
                    include_once("hienThi/vattunongnghiep.php");
                    break;
              //----------------------------
              case 'thanhtoan':
                  include_once("hienThi/thanhtoan.php");
                  break;
            //------------------------------
              case 'chitietsanpham' :
                  include_once("hienThi/chitietsanpham.php");
                  break;
              }
            }
            else {
              include_once("hienThi/trangchu.php");
            }
       ?>
          <div class="container-fluid" id="footer">
           <div class="col-md-3 col-xs-6 col-sm-3" id="footerContent">
             <p>Dũng Hạnh</p>
             <hr class="hrStyle1">
             <p>
               " Chúng tôi cam kết mang lại những giống cây trông khỏe mạnh, đảm bảo chất lượng
               cùng những sản phẩm hỗ trợ chăm bón cây trồng chất lượng, chính hãng..."
             </p>
           </div>
         <!------------------------------------------>
         <div class="col-md-3 col-xs-6 col-sm-3" id="footerContent">
             <p>Sản Phẩm</p>
             <hr class="hrStyle1">
             <ul id="footerMenu">
               <li><a href="index.php?page=cayanqua">Cây ăn quả</a></li>
               <li><a href="index.php?page=caylamnghiep">Cây lâm nghiệp</a></li>
               <li><a href="index.php?page=caycongtrinh">Cây công trình</a></li>
               <li><a href="index.php?page=hoacaycanh">Hoa - Cây cảnh</a></li>
               <li><a href="index.php?page=vattunongnghiep">Vật tư nông nghiệp</a></li>
             </ul>
         </div>
         <!-------------------------------------->
         <div class="col-md-3 col-xs-6 col-sm-3" id="footerContent">
           <p>
             Thông tin liên hệ<br/>
           </p>
           <hr class="hrStyle1">
           <p>
             Địa chỉ : Số 4 đường Học Viện Nông Nghiệp Việt Nam.<br/>
             Chuyên kinh doanh giống cây trồng, chế phẩm sinh học các loại.<br/>
             Liên hệ : dunghanh@gmail.com.<br/>
             số điện thoại: 01292007776<br/>
           </p>
         </div>
         <!--------------MAP------------------------>
         <div class="col-md-3 col-xs-6 col-sm-3" id="footerContent">
           Map
           <hr class="hrStyle1">
           <div>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.2972314961635!2d105.93353556629718!3d21.008887208677052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa363bfa9d88553d!2zQ-G7rWEgSMOgbmcgQsOhY2ggS2hvYSBTw6FjaA!5e0!3m2!1svi!2s!4v1490962282509"
             width="inherit" height="inherit" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
         </div>
         <!------------------------------------------>
       </div>
  <!--------------------------------------------------------------------------->
      </div>
    </div>
<!----------------------JavaScript---------------------------------------------->
  <script src="js/jquery-3.2.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/myJavaScript.js"></script>
</body>
</html>
