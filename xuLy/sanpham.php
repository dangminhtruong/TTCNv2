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
      $sql = "SELECT* FROM sanpham WHERE tenSP = '$tenKTSP'";
      $this->myQuery($sql);
      if ($this->numRows() > 0) {
        return 'da ton tai';
      }
      else {
        return  "chua ton tai";
      }
    }
    //------------------------------
    public function themSanPham($tenSanPham,$soLuongSanPham,$giaSanPham,$maLoaiSanPham,$moTaSanPham,$anhSanPham){
     if ($this->kiemTraTrungSP($tenSanPham) == 'chua ton tai') {
       $sql = "INSERT INTO sanpham(tenSP,soLuongSP,giaSP,maLoaiSP,moTaSP,anhSP)
               VALUES('$tenSanPham','$soLuongSanPham','$giaSanPham','$maLoaiSanPham','$moTaSanPham','$anhSanPham')";
       $this->myQuery($sql);
       return 'Them san pham thanh cong';
     }
     else {
       return 'San pham da ton tai';
     }
   }
    //--------------------------------
    public function timKiemSanPham($tuKhoa){
       $sql = "SELECT* FROM sanpham WHERE tenSP LIKE '%$tuKhoa%' ";
       $this->myQuery($sql);
       if ($this->numRows() > 0) {
         while ($ketQuaTraVe = $this->fetchData()) {
 						$result[] = array(
               'maS' => $ketQuaTraVe["maSP"],
 							'tenS' => $ketQuaTraVe["tenSP"],
               'giaS' => $ketQuaTraVe["giaSP"],
 							'loaiS' => $ketQuaTraVe["maLoaiSP"],
               'soLuongS' => $ketQuaTraVe["soLuongSP"],
               'moTaS' =>  $ketQuaTraVe["moTaSP"]
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
      $sql = "DELETE FROM sanpham WHERE maSP = '$spXoa'";
      $this->myQuery($sql);
    }
    //--------------------------------------------
    public function layThongTinTheoId($maSPS){
      $sql = "SELECT* FROM sanpham WHERE maSP = '$maSPS' ";
      $this->myQuery($sql);
      if ($this->numRows() > 0) {
        while ($ketQuaTraVe = $this->fetchData()) {
            $result[] = array(
              'maS' => $ketQuaTraVe["maSP"],
              'tenS' => $ketQuaTraVe["tenSP"],
              'giaS' => $ketQuaTraVe["giaSP"],
              'loaiS' => $ketQuaTraVe["maLoaiSP"],
              'soLuongS' => $ketQuaTraVe["soLuongSP"],
              'moTaS' =>  $ketQuaTraVe["moTaSP"]
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
    public function ktra($sql1,$sql2){
      $this->myQuery($sql1);
      if ($this->numRows() > 0) {
        $row1 = $this->fetchData();
        return $row1;
      }
      $this->freeQuery();
      $this->myQuery($sql2);
      if ($this->numRows() > 0) {
        $row2 = $this->fetchData();
        return $row2;
      }
      $this->freeQuery();
    }
    //--------------------------------------------------------------
  }
?>
