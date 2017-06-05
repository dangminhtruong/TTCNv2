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
              $sql = "INSERT INTO khachhangquen(tenKh,diaChi,soDt,email) VALUES('$ten','$diaChi','$soDT','$email')";
              $this->myQuery($sql);
              $sql2 = "SELECT id FROM khachhangquen WHERE tenKh = '$ten' AND soDt = '$soDT'";
              $this->myQuery($sql2);
              $result = $this->fetchData();
              echo $result['id'];
        }

        public function layThongTinKhachQuen($id){
              $sql = "SELECT * FROM khachhangquen WHERE id = '$id'";
              $this->myQuery($sql);
              if ($this->numRows() > 0) {
                $rows  = $this->fetchData();
                $result = array(
                  'tenKhq' => $rows['tenKh'],
                  'diaChiKh' => $rows['diaChi'],
                  'soDtKh'  => $rows['soDt'],
                  'emailkh' => $rows['email']
                );
              }
              echo json_encode($result);
        }
}
?>
