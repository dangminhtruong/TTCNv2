<?php
    include_once('__autoload.php');
    if (isset($_POST['tieuDe'],$_POST['noiDung'])) {
      $themBv = new sanpham();
      $td = $_POST['tieuDe'];
      $nd = $_POST['noiDung'];
      $sql = "INSERT INTO baiviet(tieuDe,noiDUng) VALUES('$td','$nd')";
      $themBv->myQuery($sql);
      echo "Them bai viet thanh cong";
    }

?>
