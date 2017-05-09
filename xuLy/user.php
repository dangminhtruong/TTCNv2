<?php
  /**
   *
   */
   include_once('__autoload.php');
  class user extends database
  {

    function __construct()
    {
      $this->connectDb();
    }
    //--------------KIEM TRA DANG NHAP---------------------------------
      public function checkLogin($userName, $passWord){
        $this->userName = $userName;
        $this->passWord = $passWord;
        $sql = "SELECT* FROM taikhoan WHERE tenTK = '$this->userName' AND matKhau = '$this->passWord'";
        $this->myQuery($sql);
        if ($kq =  $this->numRows() > 0) {
          return "valid";
          $this->freeQuery();
        }
        else {
          return "unvalid";
        }
      }
    //--------------KIEM TRA DANG NHAP END---------------------------------
      public function kiemTraUserPass($tenNV, $tenDN){
        $sql = "SELECT nhanvien.hoTenNV, taikhoan.tenTK FROM nhanvien JOIN taikhoan
        ON(nhanvien.hoTenNV = '$tenNV' AND taikhoan.tenTK = '$tenDN')";
        $this->myQuery($sql);
        if ($this->numRows() > 0) {
          return "Nguoi dung da ton tai";
        }
        else {
          return "Nguoi dung chua ton tai";
        }
      }
    //---------------------------------------------------------------------
      public function themNguoiDung($tenTK,$matKhau,$loaiTK,$hoTenNV,$diaChiNV,$ghiChuNV,$soDienThoaiNV){
        if ($this->kiemTraUserPass($hoTenNV,$tenTK) == 'Nguoi dung chua ton tai') {
          $sql1 = "INSERT INTO taikhoan(tenTK,matKhau,loaiTK) VALUES('$tenTK','$matKhau','$loaiTK')";
          $this->myQuery($sql1);
          //----------
          $sql2 = "SELECT taikhoan.maTK FROM taikhoan WHERE tenTK = '$tenTK' ";
          $this->myQuery($sql2);
          if ($this->numRows() > 0) {
            $rows = $this->fetchData();
            $tam = $rows['maTK'];
          }
          //----------
          $sql3 = "INSERT INTO nhanvien(hoTenNV,diaChiNV,maTK,ghiChuNV,soDienThoaiNV) VALUES('$hoTenNV','$diaChiNV','$tam','$ghiChuNV','$soDienThoaiNV')";
          $this->myQuery($sql3);
        }
        else {
          echo "Tai khoan da ton tai";
        }
      }
    //---------------------------------------------------------------------
      public function layThongTinNguoiDung($maTK){
        $sql = "SELECT nhanvien.maTK, nhanvien.hoTenNV, nhanvien.diaChiNV, nhanvien.ghiChuNV, nhanvien.soDienThoaiNV, taikhoan.tenTK,
        taikhoan.matKhau, taikhoan.loaiTK FROM nhanvien INNER JOIN taikhoan ON nhanvien.maTK = '$maTK' AND taikhoan.maTK = '$maTK'";
        $this->myQuery($sql);
        if ($this->numRows() > 0){
          while ($ketQuaTraVe = $this->fetchData()) {
              $result[] = array(
                'maTKU' => $ketQuaTraVe['maTK'],
                'hoTenU' => $ketQuaTraVe["hoTenNV"],
                'diaChiU' => $ketQuaTraVe["diaChiNV"],
                'soDienThoaiU' => $ketQuaTraVe["soDienThoaiNV"],
                'ghiChuU' => $ketQuaTraVe["ghiChuNV"],
                'tenTKU' => $ketQuaTraVe["tenTK"],
                'matKhauU' =>  $ketQuaTraVe["matKhau"],
                'loaiTKU' => $ketQuaTraVe['loaiTK']
              );
            }
          echo json_encode($result);
        }
      }
    //---------------------------------------------------------------------
    public function xoaNguoiDung($maTK){
      $sql1 = " DELETE FROM nhanvien WHERE maTK = '$maTK' ";
      $this->myQuery($sql1);
      $sql2 = " DELETE FROM taikhoan WHERE maTK = '$maTK' ";
      $this->myQuery($sql2);
    }
  }
?>
