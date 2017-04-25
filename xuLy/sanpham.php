<?php
  /**
   *
   */
   include_once('__autoload.php');
  class sanpham extends database
  {

    function __construct()
    {
      $this->connectDb();
    }
    //------------------------------
    public function kiemTraTrungSP($tenKTSP){
      $this->tenKTSP = $tenKTSP;
      $sql = "SELECT* FROM sanpham WHERE tenSanPham = '$this->tenKTSP'";
      $this->myQuery($sql);
      if ($this->numRows() > 0) {
        return 'da ton tai';
      }
      else {
        return  "chua ton tai";
      }
    }
    //------------------------------
    public function themSanPham($tenSanPham,$giaSanPham,$loaiSanPham,$soLuongSanPham,$moTaSanPham,$anhSanPham){
      $this->tenSanPham = $tenSanPham;
      $this->giaSanPham = $giaSanPham;
      $this->loaiSanPham = $loaiSanPham;
      $this->soLuongSanPham = $soLuongSanPham;
      $this->moTaSanPham = $moTaSanPham;
      $this->anhSanPham = $anhSanPham;
      if ($this->kiemTraTrungSP($this->tenSanPham) == 'chua ton tai') {
        $sql = "INSERT INTO sanpham(tenSanPham,giaSanPham,loaiSanPham,soLuongSanPham,moTaSanPham,anhSanPham)
                VALUES('$this->tenSanPham',$this->giaSanPham,'$this->loaiSanPham','$this->soLuongSanPham','$this->moTaSanPham','$this->anhSanPham')";
        $this->myQuery($sql);
        return 'Them san pham thanh cong';
      }
      else {
        return 'San pham da ton tai';
      }
    }
  }
?>
