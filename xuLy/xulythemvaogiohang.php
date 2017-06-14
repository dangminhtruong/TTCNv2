<?php
  session_start();
  ob_start();
  include_once('__autoload.php');
  $maSP = $_POST['maSP'];
  if (isset($_SESSION['giohang'],$_SESSION['muaHang'])) {
      if (array_key_exists($maSP,$_SESSION["giohang"]) == true) {
          $_SESSION['giohang'][$maSP] += 1;
          $_SESSION['muaHang'] += 1;
          echo $_SESSION['muaHang'];
      }
      else {
          $_SESSION['giohang'][$maSP] = 1;
          $_SESSION['muaHang'] +=1;
          echo $_SESSION['muaHang'];
        }
  }
  else {
    $_SESSION['giohang'][$maSP] = 1;
    $_SESSION['muaHang'] = 1;
    echo $_SESSION['muaHang'];
  }
?>
