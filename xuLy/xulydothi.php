<?php
  include_once('__autoload.php');
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $dauTuan = date("Y-m-d", strtotime("monday this week"));
  $cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
  $dauThang = date("Y-m-d", strtotime("first day of this month"));
  $cuoiThang = date("Y-m-d", strtotime("last day of this month"));
  $homNay =  date('Y/m/d');
  $thuBa = date("Y-m-d", strtotime("last tuesday"));
  $thuTu = date("Y-m-d", strtotime("last wednesday"));
  $thuNam = date("Y-m-d", strtotime("last thursday"));
  $thuSau = date("Y-m-d", strtotime("last friday"));
  $thuBay = date("Y-m-d", strtotime("last saturday"));
  $tk = new thongkedoanhthu();
  $aq = array();
  $ln = array();
  $hc = array();
  $ct = array();
  $tongTuan = array();
  $tkTuan = array(
    'mon' => $tk->layDoanhThuNgay($dauTuan),
    'tue' => $tk->layDoanhThuNgay($thuBa),
    'wed' => $tk->layDoanhThuNgay($thuTu),
    'thu' => $tk->layDoanhThuNgay($thuNam),
    'fri' => $tk->layDoanhThuNgay($thuSau),
    'sat' => $tk->layDoanhThuNgay($thuBay),
    'sun' => $tk->layDoanhThuNgay($cuoiTuan),
  );
 foreach ($tkTuan as $key => $value) {
   foreach ($value as $key1 => $value1) {
         array_push($aq,$value1['cayAnQua']);
         array_push($ln,$value1['cayLamNghiep']);
         array_push($hc,$value1['hoaCayCanh']);
         array_push($ct,$value1['cayCongTrinh']);
   }
 }
 foreach ($tkTuan as $key2 => $value2) {
   foreach ($value2 as $key2 => $value3) {
     array_push($tongTuan,array_sum($value3));
   }
 }
if (isset($_POST['tuan'])) {
    $resu = array(
      'caq' => $aq,
      'cln' => $ln,
      'hcc' => $hc,
      'ctt' => $ct,
      'tongTuan' => $tongTuan
    );
    echo json_encode($resu);
}
?>
