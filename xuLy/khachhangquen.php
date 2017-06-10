<?php

      /**
       *
       */
       include_once('__autoload.php');
      class khachhangquen extends database
      {

        function __construct()
        {
          $this->connectDb();
        }

        public function themKhachHangQuen($ten,$diaChi,$soDT,$email){
              $sql = "INSERT INTO khachhang(tenKH,diaChi,soDT,email,loaiKH) VALUES('$ten','$diaChi','$soDT','$email',1)";
              $this->myQuery($sql);
              $sql2 = "SELECT maKH FROM khachhang WHERE tenKH = '$ten' AND soDT = '$soDT'";
              $this->myQuery($sql2);
              $result = $this->fetchData();
              echo $result['maKH'];
        }

       public function layThongTinKhachQuen(){
              $sql = "SELECT* FROM khachhang WHERE loaiKH = 1";
              $this->myQuery($sql);
              if ($this->numRows() > 0) {
                return $this->fetchData();
              }
       }

        public function layThongTinKhach($id){
              $sql = "SELECT * FROM khachhang WHERE maKH = '$id'";
              $this->myQuery($sql);
              if ($this->numRows() > 0) {
                $rows  = $this->fetchData();
                $result = array(
                  'tenKhq' => $rows['tenKH'],
                  'diaChiKh' => $rows['diaChi'],
                  'soDtKh'  => $rows['soDT'],
                  'emailkh' => $rows['email']
                );
              }
              echo json_encode($result);
        }
}
?>
