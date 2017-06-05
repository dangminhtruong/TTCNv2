<?php
include_once('__autoload.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$dauTuan = date("Y-m-d", strtotime("monday this week"));
$cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
$dauThang = date("Y-m-d", strtotime("first day of this month"));
$cuoiThang = date("Y-m-d", strtotime("last day of this month"));
$homNay =  date('Y/m/d');
//---------------
$tue=date_create($dauTuan);
date_add($tue,date_interval_create_from_date_string("1 days"));
$thuBa =  date_format($tue,"Y-m-d");
$wed=date_create($dauTuan);
date_add($wed,date_interval_create_from_date_string("2 days"));
$thuTu = date_format($wed,"Y-m-d");
$thu=date_create($dauTuan);
date_add($thu,date_interval_create_from_date_string("3 days"));
$thuNam = date_format($thu,"Y-m-d");
$fri=date_create($dauTuan);
date_add($fri,date_interval_create_from_date_string("4 days"));
$thuSau = date_format($fri,"Y-m-d");
$sat=date_create($dauTuan);
date_add($sat,date_interval_create_from_date_string("5 days"));
$thuBay = date_format($sat,"Y-m-d");
//---------------
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
