<?php
  include_once('__autoload.php');
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $phantrang = new sanpham();
  $maxResult = 5;
  $listPage = '';
  $getLink = $_SERVER['PHP_SELF'];
  if (!isset($_GET['page'])) {
    $page = 1;
  }
  else {
    $page = $_GET['page'];
  }
  $sql2 = "SELECT* FROM sanpham";
  $phantrang->myQuery($sql2);
  $tongKetQua = $phantrang->numRows();
  $tongSoTrang = ceil($tongKetQua/$maxResult);
  $indexRows = $page*$maxResult - $maxResult;
  //------------------------------------------------------------
  $sql1 = "SELECT* FROM sanpham LIMIT $maxResult OFFSET $indexRows";
  $layRa = new sanpham();
  $layRa->myQuery($sql1);
  while ($rows = $layRa->fetchData()) {
    echo $rows['tenSP'];
    echo '<br/>';
  }
  ?>
    <?php
      for ($i=1; $i <=$tongSoTrang ; $i++) {
        if ($page == $i) {
          $listPage.="<a href='#'><b>".$i."</b></a>";
        }
        else {
          $listPage.="<a href=".$getLink.'?page='.$i.">".$i."</a>";
        }
      }
      echo $listPage;
      echo $_SERVER['PHP_SELF'];
      ?>
      <form method="GET">
        <input type="submit" name="page" value="5">
      </form>
