new WOW().init();
$('.dropdown-toggle').dropdown();
//-----------------------------------
$(document).ready(function(){
  $('.buttonDatMua').click(function(){
    var idsp = $(this).val();
    var soLuongTrenGioHang = Number($('#sluong').text());
    var url = "xuLy/xulythemvaogiohang.php";
    var data = {
      maSP : idsp,
      sanPhamDaChon : soLuongTrenGioHang
    };
    var success = function(result){
      $('#sluong').html(result);
      $("#giohang").css("color", "yellow");
    }
    var dataType = "text";
    $.post(url, data, success, dataType);
  });
});
//--------------------------------------
$(document).ready(function(){
  $('#btnDatHang').click(function() {
    var hoTenKh = $('#hoTenKh').val();
    var diaChiGiaoHang = $('#diaChiKh').val();
    var dienThoaiKh = $('#soDienThoaiKh').val();
    var tongHD = Number($("#tongTienHoaDon").text());
    var url = "xuly/xulydathang.php";
    var data = {
        tenKh : hoTenKh,
        diaChiKh : diaChiGiaoHang,
        soDienThoaiKh : dienThoaiKh,
        tongThanhToan : tongHD
    };
    var success = function(result){
      if (result == 'Dat hang than cong') {
      }
        $('#datHangThanhCong').modal('show');
        $('#closeDatHangThanhCong').click(function(){
            window.location.replace("http://localhost/TTCNv2/index.php?page=trangchu");
        });
    };
    var dataType = "text";
    $.post(url, data, success, dataType);
  });
});
//------------------------------------
/*$(document).ready(function(){
  $('.btn-CapNhatSl').click(function(){
    var maSpCapNhatSL = $(this).val();
    var layid = "sl" + maSpCapNhatSL;
    var soLuongUpdate = $('#'+layid).val();
    val
  });
});
*/
