//-------------------------------------------
$(document).ready(function(){
  $("#dangnhapBtn").click(function(){
    var userName = $("#tenDangNhap").val();
    var passWord = $("#matKhau").val();
//--------------------------------------------
    var url = "../xuLy/xulydangnhap.php";
    var data ={
        userName :userName,
        passWord : passWord
    };
    var dataType = "text";
    var success = function(result){
      if (result == 'Dang nhap khong thanh cong') {
        $("#saiThongTinDN").modal('show');
      }
      else {
        window.location.replace("http://localhost/TTCNv2/hienThi/quantri.php");
      }
    };
      $.post(url, data, success, dataType);
//---------------------------------------------
  });
});
/*----------------------------------------------------------------------------*/
$(document).ready(function(){
  $('#formthemSanPham').submit(function(e){
    var loaiSP = $('select[name=loaiSanPham]').val();
    var tenSP = $('#tenSanPham').val();
    var giaSP = $('#giaSanPham').val();
    var soLuongSP = $('#soLuongSanPham').val();
    var moTaSP = $('#moTaSanPham').val();
    var anhSP = $('#imageUpload').val();

    if (loaiSP == '' || tenSP=='' || giaSP=='' || soLuongSP=='' || moTaSP=='' || anhSP=='') {
      e.preventDefault();

      if (loaiSP == '') {
          $('[data-toggle="tooltip0"]').tooltip('show');
        }
      if (tenSP == '') {
          $('[data-toggle="tooltip1"]').tooltip('show');
        }
      if (giaSP == '') {
          $('[data-toggle="tooltip2"]').tooltip('show');
        }
      if (soLuongSP == '') {
          $('[data-toggle="tooltip3"]').tooltip('show');
        }
      if (moTaSP == '') {
          $('[data-toggle="tooltip4"]').tooltip('show');
        }
      if (anhSP == '') {
          $('[data-toggle="tooltip5"]').tooltip('show');
        }
    }
    else {
      $('#formthemSanPham').unbind('submit').submit();
    }
  });
});
