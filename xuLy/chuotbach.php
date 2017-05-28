<?php
  include_once('__autoload.php');
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $dauTuan = date("Y-m-d", strtotime("monday this week"));
  $cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
  $dauThang = date("Y-m-d", strtotime("first day of this month"));
  $cuoiThang = date("Y-m-d", strtotime("last day of this month"));
  $homNay =  date('Y/m/d');
  $thuBa = date("Y-m-d", strtotime("last tuesday this week"));
  $thuTu = date("Y-m-d", strtotime("last wednesday"));
  $thuNam = date("Y-m-d", strtotime("last thursday"));
  $thuSau = date("Y-m-d", strtotime("last friday"));
  $thuBay = date("Y-m-d", strtotime("last saturday"));
  echo $dauTuan."<br>";
  echo $thuBa."<br>";
  echo $cuoiTuan."<br>";
?>
