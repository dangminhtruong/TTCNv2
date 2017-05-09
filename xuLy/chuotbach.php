<?php
  include_once('__autoload.php');
  $sql1 = "SELECT* FROM sanpham";
  $sql2 = "SELECT* FROM loaisanpham";
  $test = new sanpham();
  $re = $test->ktra($sql1,$sql2);
  echo 
?>
