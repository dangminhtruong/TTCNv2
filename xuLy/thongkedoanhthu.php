<?php
    /**
     *
     */
     include_once("__autoload.php");
    class thongkedoanhthu extends database
    {

      function __construct()
      {
        $this->connectDb();
      }

      public function layDoanhThuNgay($date){
        $cayAnQua = 0;
        $cayLamnghiep = 0;
        $hoaCayCanh  = 0;
        $cayCongTrinh = 0;
        $sql = "SELECT donhang.ngaydathang, donhang.maDH, donhang.tongthanhtoan FROM donhang
        WHERE donhang.ngaydathang = '$date'";
        $test = new sanpham();
        $test->myQuery($sql);
        if ($test->numRows() > 0) {
          while ($rows = $test->fetchData()) {
            $madh = $rows['maDH'];
            $sql2 = "SELECT chitietdonhang.masp, chitietdonhang.soLuong FROM chitietdonhang WHERE maDH = '$madh'";
            $get = new sanpham();
            $get->myQuery($sql2);
            if ($get->numRows() > 0) {
              while ($rows2 = $get->fetchData()) {
                $masp = $rows2['masp'];
                $soLuong = $rows2['soLuong'];
                $sql3 = "SELECT sanpham.maloaisp, sanpham.giasp FROM sanpham WHERE masp = '$masp'";
                $get2 = new sanpham();
                $get2->myQuery($sql3);
                if ($get2->numRows() > 0) {
                  $row3 = $get2->fetchData();
                  switch ($row3['maloaisp']) {
                    case '1':
                        $cayAnQua += $soLuong*$row3['giasp'];
                      break;
                    case '2':
                        $cayCongTrinh += $soLuong*$row3['giasp'];
                      break;
                   case '3':
                       $cayLamnghiep += $soLuong*$row3['giasp'];
                     break;
                  case '4':
                      $hoaCayCanh += $soLuong*$row3['giasp'];
                    break;
                  }
                }
              }
            }
          }
        }
        $dayResult[] = array(
          'cayAnQua' => $cayAnQua,
          'cayLamNghiep' => $cayLamnghiep,
          'hoaCayCanh' => $hoaCayCanh,
          'cayCongTrinh' => $cayCongTrinh,
        );
        return $dayResult;
      }
    }
?>
