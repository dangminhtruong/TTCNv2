<?php
  session_start();
  ob_start();
  include_once("../xuLy/__autoload.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dung Hanh</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/qtristyle.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto+Condensed" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <?php
        if (isset($_SESSION['userName'],$_SESSION['passWord'])) {
    ?>
    <!----------------------------------------------------------------------------->
    <div class="container-fluid">
      <div class="row">
        <!-----------NAVIGATION BAR------------------->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" id="DungHanhBrand" href="#">Dũng Hạnh</a>
            </div>
          </div>
        </nav>
<!------------------------------------------------------------------------------------->
<div id="qtri">
<!------------------------------------------------------------------------------------->
    <div class="col-md-2 row" id="qtriLeft">
      <div class="col-md-12 qtriLeftBar">
          <div class="panel panel-default row">
             <div class="panel-heading">
               <a href="http://localhost/TTCNv2/hienThi/quantri.php" class="hvr-grow-shadow qtriLeftBarLi"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ quản trị</a>
             </div>
             <div class="panel-body">
               <a href="#" class="hvr-grow-shadow qtriLeftBarLi">Hướng dẫn sử dụng</a>
             </div>
             <div class="panel-footer">
               <a href="#" class="hvr-grow-shadow qtriLeftBarLi">Điều khoản sử dụng</a>
             </div>
             <div class="panel-body">
               <a href="#" class="hvr-grow-shadow qtriLeftBarLi">Đổi mật khẩu</a>
             </div>
             <div class="panel-footer">
               <a href="http://localhost/TTCNv2/hienThi/quantri.php?page=dangxuat" class="hvr-grow-shadow qtriLeftBarLi">Đăng xuất</a>
             </div>
         </div>
      </div>
      <div class="col-md-12 hidden-xs" id="qtriLeft2">
        <img src=" ../images/gthoa.png" class="img-responsive" alt="none">
      </div>
    </div>
<!-------------------------------------------------------------------------------------->
    <?php
          if (isset($_GET['page'])) {

            switch ($_GET['page']) {
              case 'themsanpham':
                include_once('themsanpham.php');
                break;
              case 'suaxoasanpham':
                  include_once('suaxoasanpham.php');
                break;
              case 'quanlyloaisanpham':
                  include_once('quanlyloaisanpham.php');
                break;
              case 'themnguoidung':
                  include_once('themnguoidung.php');
                break;
              case 'suaxoanguoidung':
                  include_once('suaxoanguoidung.php');
                break;
              case 'xemdonhang' :
                  include_once('xemdonhang.php');
                break;
              case 'xemdoanhthu':
                  include_once('xemdoanhthu.php');
                break;
              case 'thongketonkho':
                  include_once('thongketonkho.php');
                break;
              case 'thembaiviet' :
                  include_once('thembaiviet.php');
                break;
              case 'dangxuat':
                  header('location:../xuLy/dangxuat.php');
                break;
            }
          }
          else {
            include_once('trangchuquantri.php');
          }
    ?>
<!-------------------------------------------------------------------------------------->
</div>
<!-------------------------------------->
</div>
</div>
<!-------------------------------------------------------------------------------------->
<script src="../js/jquery-3.2.0.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/wow.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../ckeditor/ckeditor.js"> </script>
<script src="../js/qtriJavascript.js"></script>
   <!--------------------------------------------->
   <?php
     }
     else {
       header("location:http://localhost/TTCNv2/hienthi/dangnhap.php");
     }
   ?>
   <?php
    if (isset($_SESSION['themSPThanhCong'])) { ?>
      <script>
       $(document).ready(function(){
           $("#themSPThanhCong").modal("show");
       });
     </script>
  <?php unset($_SESSION['themSPThanhCong']); } ?>
  <!----------------------------------------------->
  <?php
   if (isset($_SESSION['themSPKhongThanhCong'])) { ?>
     <script>
      $(document).ready(function(){
          $("#trungLapSP").modal("show");
      });
    </script>
 <?php unset($_SESSION['themSPKhongThanhCong']); } ?>
 <!----------------------------------------------------->
 <?php
    if (isset($_SESSION['chinhsuathanhcong'])) { ?>
      <script>
       $(document).ready(function(){
           $("#suaSPThanhCong").modal("show");
       });
     </script>
<?php unset($_SESSION['chinhsuathanhcong']); } ?>
</body>
</html>
