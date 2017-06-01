<?php
include_once('__autoload.php');
/* date_default_timezone_set('Asia/Ho_Chi_Minh');
$dauTuan = date("Y-m-d", strtotime("monday this week"));
$cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
$dauThang = date("Y-m-d", strtotime("first day of this month"));
$cuoiThang = date("Y-m-d", strtotime("last day of this month"));
$homNay =  date('Y/m/d');
$thuBa = date("Y-m-d", strtotime("tuesday this week"));
$thuTu = date("Y-m-d", strtotime("wednesday this week"));
$thuNam = date("Y-m-d", strtotime("thursday this week"));
$thuSau = date("Y-m-d", strtotime("friday this week"));
$thuBay = date("Y-m-d", strtotime("saturday this week"));
$mong2 =  date("Y-m-d", strtotime("2nd day of this month"));
echo $mong2;
*/   class thongKeSPBC extends database
    {

      function __construct()
      {
        $this->connectDb();
      }

      public function demSanPhamBanChay($day1,$day2){
          $sql = "SELECT chitietdonhang.masp, sum(soluong) as 'brmsp',tensp FROM chitietdonhang INNER JOIN sanpham ON (chitietdonhang.masp = sanpham.masp)
                  WHERE chitietdonhang.madh IN (SELECT donhang.madh FROM donhang WHERE ngaydathang BETWEEN '$day1' AND '$day2')
                  GROUP BY chitietdonhang.masp
                  ORDER BY brmsp DESC";
          $this->myQuery($sql);
          while ($rows = $this->fetchData()) {
              echo $rows['masp']."----".$rows['brmsp']."-----".$rows['tensp']."<br/>";
          }
      }
  }
  $test = new thongKeSPBC();
  $test->demSanPhamBanChay('2017-05-23','2017-05-23');
?>
