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
    var emailKh = $('#emailKh').val();
    var hinhThucThanhToan = $('select[name=hinhThucTT]').val();
    var tongHD = Number($("#tongTienHoaDon").text());
    if (hoTenKh == '' || diaChiGiaoHang=='' || dienThoaiKh=='') {
          if (hoTenKh == '') {
            $('#hoTenKh').tooltip('show');
          }
          if (diaChiGiaoHang=='') {
            $('#diaChiKh').tooltip('show');
          }
          if (dienThoaiKh=='') {
            $('#soDienThoaiKh').tooltip('show');
          }
    }
    else {
      var url = "xuly/xulydathang.php";
      var data = {
          tenKh : hoTenKh,
          diaChiKh : diaChiGiaoHang,
          soDienThoaiKh : dienThoaiKh,
          email : emailKh,
          cachThanhToan : hinhThucThanhToan,
          tongThanhToan : tongHD
      };
      var success = function(result){
          console.log(result);
          $('#maDonHang').html(result[0]['maDH']);
          $('#tenKhHd').html(hoTenKh);
          $('#diaChiKhHd').html(diaChiGiaoHang);
          $('#soDtKhHd').html(dienThoaiKh);
          $('#emailKhHd').html(emailKh);
          $('#cachThanhToanHd').html(hinhThucThanhToan);
          $('#tongThanhToanHD').html(tongHD);
          add = '';
          for (i in result) {
              add += '<div class="col-md-6"><i>';
              add += result[i]['tenSP'];
              add += '</i></div><div class="col-md-3">';
              add += result[i]['soLuongSp'];
              add += '</div><div class="col-md-3">';
              add +=  result[i]['donGia'];
              add += '</div>';
          }
          $('#themTTSoLuongSp').html(add);
          //--------------------------------------------
          $('#datHangThanhCong').modal('show');
          $('#closeDatHangThanhCong').click(function(){
              window.location.replace("/TTCNv2/index.php?page=trangchu");
          });
      };
      var dataType = "json";
      $.post(url, data, success, dataType);
    }
    //-----
  });
});
//------------------------------------
$(document).ready(function(){
  $('.btn-CapNhatSl').click(function(){
    var maSpCapNhatSL = $(this).val();
    var soLuongUpdate = $('#'+maSpCapNhatSL).val();
    var donGiaSP = Number($('#gia'+maSpCapNhatSL).text());
    var tongDg = Number($('#tongtien'+maSpCapNhatSL).text());
    var tongHoaDon = Number($("#tongTienHoaDon").text());
    if (soLuongUpdate != 0) {
      var url ="xuly/capnhatgiohang.php";
      var data = {
          maSP : maSpCapNhatSL,
          soLuong : soLuongUpdate,
          donGia : donGiaSP,
          tongDonGia : tongDg,
          tongHD  : tongHoaDon
      };
      var success = function(result){
        console.log(result);
        for(i in result){
           $('#'+maSpCapNhatSL).attr('placeholder',result['capNhatSoLuong']);
           $('#tongtien'+maSpCapNhatSL).html(result['thanhTien']);
           $("#tongTienHoaDon").html(result['capNhatHoaDon']);
        }
      }
      var dataType = "json";
      $.post(url, data, success, dataType);
    }
  });
});
//---------------------------------------
$(document).ready(function(){
  $('.btn-botSanPham').click(function(){
    var maSP = $(this).val();
    var tongDg = Number($('#tongtien'+maSP).text());
    var tongHoaDon = Number($("#tongTienHoaDon").text());
    var url = "xuly/capnhatgiohang.php";
    var data = {
      maSanPhamXoaBo : maSP
    };
    var success = function(result){
        if (result != 'khong tim thay') {
          $("#tr"+ maSP).remove();
          $("#tongTienHoaDon").html(tongHoaDon-tongDg);
          $('#sluong').html(result);
          var test  = $('#mark1 > tr').length;
          if (test == 0) {
            var url = "xuly/capnhatgiohang.php";
            var data = {
                guiThongBao : 'Khach hang da xoa het'
            }
            var success = function(result){
                if (result = 'Xu ly thanh cong') {
                  $('#giohang').css('color','#777');
                  $('#thanhToanTop').remove();
                  $('#tongTien').remove();
                  $('#formNTTKH').remove();
                  $('#thanhtoan').append('<div class="col-md-12">Thật tiếc, bạn vừa bỏ hết sản phẩm trong giỏ hàng. Nhấn vào <a href="/TTCNv2/index.php?page=trangchu">ĐÂY</a> để lựa chọn những sản phầm khác...</div>');
                }
            }
            var dataType = "text";
            $.post(url, data, success, dataType);
          }
        }
    }
    var dataType = "text";
    $.post(url,data,success,dataType)
  });

});
//------------------------------
$(document).ready(function(){
  $('#timSanPhamCanSua').keyup(function(){
    var timkiemSP = $('#timSanPhamCanSua').val();
    if (timkiemSP != '') {
      var url = "xuLy/timkiemsanpham.php";
      var data = {
          tenSPCS : timkiemSP
      };
      var dataType = "json";
      var success = function(result){
          var inn = '';
          //-----------------
            $.each(result,function(index, item){
              inn += '<li>';
              inn +=  '<button type="button" class="btn btn-default btn-xs btn-muaSanPham" value= ';
              inn += item['maS'];
              inn += '>Mua</button> ';

              inn += '<a href="index.php?page=chitietsanpham&idsp='+item['maS'];
              inn += '" target="_blank">';
              inn +=  '<button type="button" class="btn btn-danger btn-xs btn-xemThem" value= ';
              inn += item['maS'];
              inn +=  '>Xem thêm</button></a>';

              inn +=  '<span> ';
              inn +=  item['tenS'];
              inn +=  '</span>';
              inn +=  '</li>';
              console.log(item['maS']);
              $("#markToAdd").html(inn);
            });
            //----------------------------------
            $('.btn-muaSanPham').click(function(){
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
            //----------------------------------
      };
      $.post(url, data, success, dataType);
    }
    else {
      var inn = '<li id="markToAdd" class="dropdown-header">Kết quả tìm kiếm</li>';
      $("#markToAdd").html(inn);
    }
  //-------------------------------------------
  });
});
//--------------------------------------------------------------------
$(document).ready(function(){
  $('#sapXepTang').click(function(){
    var sapXepTheo = "tangDan";
    var maxResult = $('#maxResult').val();
    var indexRows = $('#indexRows').val();
    var loaiSanPham = $('#loaiSanPham').val();
    var url = "xuly/sapxepsanpham.php";
    data = {
      maxRes : maxResult,
      indexRow : indexRows,
      sapXepTang : sapXepTheo,
      loaiSP : loaiSanPham
    }
   $('#loadSapXep').load(url,data);
  });
  //-------------------------
  $('#sapXepGiam').click(function(){
    var sapXepTheo = "giamDan";
    var maxResult = $('#maxResult').val();
    var indexRows = $('#indexRows').val();
    var loaiSanPham = $('#loaiSanPham').val();
    var url = "xuly/sapxepsanpham.php";
    data = {
      sapXepGiam : sapXepTheo,
      loaiSP : loaiSanPham,
      maxRes : maxResult,
      indexRow : indexRows
    }
   $('#loadSapXep').load(url,data);
  });
});
