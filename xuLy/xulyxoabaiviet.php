<?php
    include_once('__autoload.php');
    if (isset($_POST['idBvDel'])) {
      $id = $_POST['idBvDel'];
      $sql = "DELETE FROM baiviet WHERE id = '$id'";
      $xoaBv = new sanpham();
      $xoaBv->myQuery($sql);
      echo "Xoa bai viet thanh cong";
    }
    else {
      echo "Xoa bai viet khong thanh cong";
    }
?>
