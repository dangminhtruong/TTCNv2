<?php
  /**
   *
   */
   include_once('__autoload.php');
  class loaisanpham extends database
  {

    function __construct()
    {
      $this->connectDb();
    }
    //--------------------------
    public function kiemTraTrungLoaiSP($tenLSP)
    {
      $sql = "SELECT* FROM loaisanpham WHERE tenLoaiSP = '$tenLSP'";
      $this->myQuery($sql);
      if ($this->numRows() > 0) {
        return "Existed";
      }
      else {
        return "NoExisted";
      }
    }
    //------------------------
    public function themLoaiSanPham($tenLSPM,$chiChuLoaiSP){
      if ($this->kiemTraTrungLoaiSP($tenLSPM) == 'NoExisted') {
        $sql = "INSERT INTO loaisanpham(tenLoaiSP,ghiChu) VALUES('$tenLSPM','$chiChuLoaiSP')";
        $this->myQuery($sql);
        echo "Them moi loai san pham thanh cong";
      }
      else {
        echo "Loai san pham da ton tai";
      }
    }
    //-------------------------
  }
?>
