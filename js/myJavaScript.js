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
