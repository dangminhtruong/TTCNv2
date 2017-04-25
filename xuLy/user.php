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
        $sql = "SELECT* FROM quanlynguoidung WHERE tenDangNhap = '$this->userName' AND matKhau = '$this->passWord '";
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
  }

?>
