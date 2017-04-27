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
      $sql = "SELECT* FROM sanpham WHERE tenSanPham = '$tenKTSP'";
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
      if ($this->kiemTraTrungSP($tenSanPham) == 'chua ton tai') {
        $sql = "INSERT INTO sanpham(tenSanPham,giaSanPham,loaiSanPham,soLuongSanPham,moTaSanPham,anhSanPham)
                VALUES('$tenSanPham',$giaSanPham,'$loaiSanPham','$soLuongSanPham','$moTaSanPham','$anhSanPham')";
        $this->myQuery($sql);
        return 'Them san pham thanh cong';
      }
      else {
        return 'San pham da ton tai';
      }
    }
    //--------------------------------
    public function timKiemSanPham($tuKhoa){
      $sql = "SELECT* FROM sanpham WHERE tenSanPham LIKE '%$tuKhoa%' ";
      $this->myQuery($sql);
      if ($this->numRows() > 0) {
        while ($ketQuaTraVe = $this->fetchData()) {
						$result[] = array(
              'maS' => $ketQuaTraVe["maSanPham"],
							'tenS' => $ketQuaTraVe["tenSanPham"],
              'giaS' => $ketQuaTraVe["giaSanPham"],
							'loaiS' => $ketQuaTraVe["loaiSanPham"],
              'soLuongS' => $ketQuaTraVe["soLuongSanPham"],
              'moTaS' =>  $ketQuaTraVe["moTasanPham"]
						);
					}
        echo json_encode($result);
      }
      else {
        $result[] = array(
          'maS' => '....',
          'tenS' => 'Không xác định',
          'giaS' => '...',
          'loaiS' => '...',
          'soLuongS' => '...',
          'moTaS' =>  '...'
        );
          echo json_encode($result);
      }
    }
    //-------------------------------------------
    public function xoaSanPham($spXoa){
      $sql = "DELETE FROM sanpham WHERE maSanPham = '$spXoa'";
      $this->myQuery($sql);
    }
    //--------------------------------------------
    public function layThongTinTheoId($maSPS){
      $sql = "SELECT* FROM sanpham WHERE maSanPham = '$maSPS' ";
      $this->myQuery($sql);
      if ($this->numRows() > 0) {
        while ($ketQuaTraVe = $this->fetchData()) {
            $result[] = array(
              'maS' => $ketQuaTraVe["maSanPham"],
              'tenS' => $ketQuaTraVe["tenSanPham"],
              'giaS' => $ketQuaTraVe["giaSanPham"],
              'loaiS' => $ketQuaTraVe["loaiSanPham"],
              'soLuongS' => $ketQuaTraVe["soLuongSanPham"],
              'moTaS' =>  $ketQuaTraVe["moTasanPham"]
            );
          }
        echo json_encode($result);
      }
      else {
        $result[] = array(
          'maS' => '....',
          'tenS' => 'Không xác định',
          'giaS' => '...',
          'loaiS' => '...',
          'soLuongS' => '...',
          'moTaS' =>  '...'
        );
          echo json_encode($result);
      }
    }
    //--------------------------------------------------------------
  }
?>
