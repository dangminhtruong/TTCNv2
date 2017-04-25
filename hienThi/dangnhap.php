<?php
  session_start();
  ob_start();
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
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  </head>
  <body>
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
          <div class="container-fluid dangnhap">
              <!-------->
              <div class="modal fade bs-example-modal-sm" id="saiThongTinDN" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <strong>Sai thông tin đăng nhập !</strong>
                  </div>
                </div>
              </div>
            <!------------>
              <div class="col-md-12" id="loginMainContent">
                <div class="col-md-3 hidden-xs">
                  <img src=" ../images/gthoa.png" class="img-responsive" alt="none">
                </div>
                <div class="col-md-6" id="login1">
                   <div class="well well-sm"><strong>Đăng nhập</strong></div>
                   <!--------------------------------------------------------->
                    <form class="form-horizontal" action="model/xulydangnhap.php" method="post" id="formDangNhap">
                      <div class="form-group">
                        <label class="control-label col-md-2" >Tên đăng nhập:</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" id="tenDangNhap" name="tenDangNhap" placeholder="Tên đăng nhập">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2">Mật khẩu:</label>
                        <div class="col-md-10">
                          <input type="password" class="form-control" id="matKhau" name="matKhau" placeholder="Mật khẩu">
                        </div>
                      </div>
                    </form>
                <button type="button" class="btn btn-default btn-lg btn-block" id="dangnhapBtn" name="submitBtn" form="formDangNhap">
                  <strong>Hoàn tất</strong>
                </button>
                 <!--------------------------------------------------------->
              </div>
              <div class="col-md-3 hidden-xs">
                <img src=" ../images/gthoa.png" class="img-responsive" alt="none">
              </div>
            </div>
          </div>
          <!-------------------------------------------->

          <!-------------------------------------------->
<script src="../js/jquery-3.2.0.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/qtriJavascript.js"></script>
   <!--------------------------------------------->
</body>
</html>
