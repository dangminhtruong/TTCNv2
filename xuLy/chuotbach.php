<?php
  include_once('__autoload.php');
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $dauTuan = date("Y-m-d", strtotime("last Monday"));
  $cuoiTuan = date("Y-m-d", strtotime("next Sunday"));
  $dauThang = date("Y-m-d", strtotime("first day of this month"));
  $cuoiThang = date("Y-m-d", strtotime("last day of this month"));
  echo $dauTuan;
  echo "<br>";
  echo $cuoiTuan;
  echo "<br>";
  echo $dauThang;
  echo "<br>";
  echo $cuoiThang;
  $tam = new sanpham();
  $vovan = 11;
  $_SESSION["Sanpham"] = array();
  $_SESSION["Sanpham"][1] = (2);
  $_SESSION["Sanpham"][21] = (7);
  $_SESSION["Sanpham"][11] = (3);
  if (array_key_exists($vovan,$_SESSION["Sanpham"]) == true) {
    unset($_SESSION["Sanpham"][$vovan]);
  }
  else {
    $_SESSION["Sanpham"][$vovan] = 1;
  }
  foreach ($_SESSION['Sanpham'] as $key => $value) {
    $sql = "SELECT sanpham.tenSP, sanpham.giaSP FROM sanpham WHERE maSP = '$key'";
    $tam->myQuery($sql);
    $rows = $tam->fetchData();
    $tongTien = $rows['giaSP']*$value;
    ?>
    <a href="#" style="color:red"><?php  echo $rows['tenSP']."  Gia tien  ".$tongTien."<br/>"; ?></a>
    <?php
    }
    ?>
