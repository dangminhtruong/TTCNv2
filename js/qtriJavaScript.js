//------------------KIEM TRA DANG NHAP-------------------------
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
/*--------------------------KIEM TRA VALID FROM THEM SAN PHAM--------------------------------------------------*/
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
//------------------------------XU LY TIM KIEM-----------------------------------------------------------
$(document).ready(function(){
  $('#timSanPhamCanSua').keyup(function(){
    var timkiemSP = $('#timSanPhamCanSua').val();
    if (timkiemSP != '') {
      var url = "../xuLy/timkiemsanpham.php";
      var data = {
          tenSPCS : timkiemSP
      };
      var dataType = "json";
      var success = function(result){
          var inn = '';
          //-----------------
            $.each(result,function(index, item){
              inn += '<li>';

              inn +=  '<button type="button" class="btn btn-default btn-xs btn-edit2" value= ';
              inn += index;
              inn += '>Sửa</button> ';

              inn +=  '<button type="button" class="btn btn-danger btn-xs btn-delete2" value= ';
              inn += item['maS'];
              inn +=  '>Xóa</button>';

              inn +=  '<span> ';
              inn +=  item['tenS'];
              inn +=  '</span>';
              inn +=  '</li>';
              $("#markToAdd").html(inn);
            });
            //----------------------------------
            $('.btn-edit2').click(function(){
              var idSP2 = ($(this).val());
              for (i in result) {
                $("select > option[value=" + result[idSP2]['loaiS'] + "]").prop("selected",true);
                $('#idSanPham').attr('value',result[idSP2]['maS']);
                $('#tenSanPham').attr('placeholder',result[idSP2]['tenS']);
                $('#giaSanPham').attr('placeholder',result[idSP2]['giaS']);
                $('#giaSanPham').attr('placeholder',result[idSP2]['giaS']);
                $('#soLuongSanPham').attr('placeholder',result[idSP2]['soLuongS']);
                $('#moTaSanPham').attr('placeholder',result[idSP2]['moTaS']);
              }
              $('#SuaSanPhamModal').modal('show');
            });
            //-----------------------------------
            $('.btn-delete2').click(function(){
              idSPX2 = ($(this).val());
              var url = "../xuLy/xoasanpham.php";
              var data = {
                maSPX : idSPX2
              };
              var success = function(result){
                console.log(result);
                if (result == "Da xoa san pham") {
                  $('#xoaSPThanhCong').modal('show');
                  function myFunction() {
                      setTimeout(function(){
                        window.location.replace("http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham");
                      }, 1000);
                  }
                  myFunction();
                }
              }
              var dataType = "text";
              $.post(url, data, success, dataType);
            });
            //-----------------------------------
        //------------------
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
//---------------------------------------------
$(document).ready(function(){
  $('.btn-edit1').click(function(){
    var idSP1 = ($(this).val());
    var url = "../xuLy/laythongtinsanpham.php";
    var data = {
      maSPS : idSP1
    };
    var dataType = "json";
    var success = function(result){
      console.log(result);
        for (i in result) {
          $("select > option[value=" + result[0]['loaiS'] + "]").prop("selected",true);
          $('#idSanPham').attr('value',result[0]['maS']);
          $('#tenSanPham').attr('placeholder',result[0]['tenS']);
          $('#giaSanPham').attr('placeholder',result[0]['giaS']);
          $('#giaSanPham').attr('placeholder',result[0]['giaS']);
          $('#soLuongSanPham').attr('placeholder',result[0]['soLuongS']);
          $('#moTaSanPham').attr('placeholder',result[0]['moTaS']);
        }
        $('#SuaSanPhamModal').modal('show');
    }
    $.post(url, data, success, dataType);
  });
});
//-----------------------------------------
$('.btn-delete').click(function(){
  idSPX = ($(this).val());
  console.log(idSPX);
  var url = "../xuLy/xoasanpham.php";
  var data = {
    maSPX : idSPX
  };
  var success = function(result){
    console.log(result);
    if (result == "Da xoa san pham") {
      $('#xoaSPThanhCong').modal('show');
      function myFunction() {
          setTimeout(function(){
            window.location.replace("http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoasanpham");
          }, 1000);
      }
      myFunction();
    }
  }
  var dataType = "text";
  $.post(url, data, success, dataType);
});
//----------------------------------------
$(document).ready(function(){
  $('#submitThemLoaiSP').click(function(){
    var tenLoaiSP = $('#tenLoaiSP').val();
    var moTaLoaiSP =  $('#moTaLoaiSP').val();
    var url = "../xuLy/xulythemloaiSP.php";
    var data = {
      tenloaiSPM : tenLoaiSP,
      moTaLoaiSPM : moTaLoaiSP
    };
    var success = function(result){
      if (result == 'Them moi loai san pham thanh cong') {
        $('#themLoaiSPTC').modal('show');
        function myResetFunction() {
            setTimeout(function(){
              window.location.replace("http://localhost/TTCNv2/hienThi/quantri.php?page=quanlyloaisanpham");
            }, 1000);
        }
        myResetFunction();
      }
      else {
        $('#themLoaiSPKTC').modal('show');
      }
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//-----------------------------------
$(document).ready(function(){
  $('#submitThemNguoiDung').click(function(){
    var loaiTK =  $('select[name=loaiTaiKhoanND]').val();
    var tenND = $('#tenND').val();
    var diaChiND = $('#diaChiND').val();
    var dienThoaiND = $('#soDienThoaiND').val();
    var tenDangNhapND = $('#tenDangNhapND').val();
    var matKhauND = $('#matKhauND').val();
    var ghiChuND = $('#ghiChuND').val();
    var url ="../xuly/xulythemnguoidung.php";
    var data = {
        loaiTaiKhoan : loaiTK,
        tenNV : tenND,
        diaChi : diaChiND,
        soDTND : dienThoaiND,
        tenDangNhap : tenDangNhapND,
        matKhau : matKhauND,
        ghiChu : ghiChuND
    }
    var success = function(result){
      console.log(result);
      if (result == 'Them nguoi dung thanh cong') {
        $('#themnhanvientc').modal('show');
        $('#resetThemNguoiDung').click();
      }
      else {
        $('#themnhanvienktc').modal('show');
      }
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//----------------------------------------------
$(document).ready(function(){
  $('.btn-editUser').click(function(){
    var idUser = $(this).val();
    var url ="../xuly/laythongtinnguoidung.php";
    var data = {
      maTKEdit : idUser
    };
    var success = function(result){
        for (i in result) {
          $("select > option[value=" + result[0]['loaiTKU'] + "]").prop("selected",true);
          $('#upDateMaNV').attr('value',result[0]['maTKU']);
          $('#upDateTenND').attr('placeholder',result[0]['hoTenU']);
          $('#upDateDiaChiND').attr('placeholder',result[0]['diaChiU']);
          $('#upDateSoDienThoaiND').attr('placeholder',result[0]['soDienThoaiU']);
          $('#upDateTenDangNhapND').attr('placeholder',result[0]['tenTKU']);
          $('#upDateMatKhauND').attr('placeholder',result[0]['matKhauU']);
          $('#upDateGhiChuND').attr('placeholder',result[0]['ghiChuU']);
        }
    }
    var dataType = "json";
    $.post(url,data,success,dataType);
    $('#suaNguoiDung').collapse('show');
  });
});
//----------------------------------------------
$(document).ready(function(){
  $('#submitSuaNguoiDung').click(function(){
    var  upDateMaNV = $('#upDateMaNV').val();
    var  upDateLoaiTK =  $('select[name=upDateLoaiTaiKhoanND]').val();
    var  upDateTenND = $('#upDateTenND').val();
    var  upDateDiaChiND = $('#upDateDiaChiND').val();
    var  upDateDienThoaiND= $('#upDateSoDienThoaiND').val();
    var  upDateTenDangNhapND= $('#upDateTenDangNhapND').val();
    var  upDateMatKhauND= $('#upDateMatKhauND').val();
    var  upDateGhiChuND= $('#upDateGhiChuND').val();
    var  url = "../xuly/xulysuanguoidung.php";
    var  data = {
         editMaNV : upDateMaNV,
         editLoaiTK : upDateLoaiTK,
         editTenNV : upDateTenND,
         editDiaChiNV : upDateDiaChiND,
         editDienThoaiNV : upDateDienThoaiND,
         editTenTK : upDateTenDangNhapND,
         editMatKhau : upDateMatKhauND,
         editGhiChuTK : upDateGhiChuND
    }
    var success = function(result){
         if (result == 'Da cap nhat') {
            $('#suaTaiKhoanThanhCong').modal('show');
            $('#resetSuaNguoiDung').click();
         }
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//------------------------------------------------
$(document).ready(function(){
  $('.btn-deleteUser').click(function(){
      var maTkDel = $(this).val();
      var url = "../xuly/xoanguoidung.php";
      var data = {
        maTK : maTkDel
      };
      var success = function(result){
        console.log(result);
          if (result == 'Xoa thanh cong') {
              $('#xoaTaiKhoanThanhCong').modal('show');
              function myFunction() {
                  setTimeout(function(){
                    window.location.replace("http://localhost/TTCNv2/hienThi/quantri.php?page=suaxoanguoidung");
                  }, 1000);
              }
              myFunction();
          }
      };
      var dataType = "text";
      $.post(url,data,success,dataType);
  });
});
//------------------------------------------------------------------
$(document).ready(function(){
  $('#timTheoTuanThang').change(function(){
      var tam = $('#timTheoTuanThang').val();
      if (tam != 'null') {
        $('#timTuNgay').prop("disabled", true);
        $('#timDenNgay').prop("disabled", true);
      }
      else {
        $('#timTuNgay').prop("disabled", false);
        $('#timDenNgay').prop("disabled", false);
      }
    });
    //------------
    $('#timTuNgay').keyup(function(){
        var tam1 = $('#timTuNgay').val();
        var tam2 = $('#timDenNgay').val();
        if (tam1 != '') {
          $('#timTheoTuanThang').prop("disabled", true);
        }
        else if(tam1 =='' && tam2 == ''){
          $('#timTheoTuanThang').prop("disabled", false);
        }
      });
      //-------
      $('#timDenNgay').keyup(function(){
          var tam1 = $('#timTuNgay').val();
          var tam2 = $('#timDenNgay').val();
          if (tam2 != '') {
            $('#timTheoTuanThang').prop("disabled", true);
          }
          else if(tam1 =='' && tam2 == ''){
            $('#timTheoTuanThang').prop("disabled", false);
          }
        });
});
//------------------------------------------------------
$(document).ready(function(){
    $('#timKiemDonHang').click(function(){
      var timTinhTrang =   $('select[name=timTheoTinhTrang]').val();
      var timTuanThang = $('select[name=timTheoTuanThang]').val();
      var timTuNgay = $('#timTuNgay').val();
      var timDenNgay = $('#timDenNgay').val();
      //---------------------
      //---------------------
      var url = "../xuly/locdonhang.php";
      var data = {
        timTheoTinhTrang : timTinhTrang,
        timTrongTuanThang : timTuanThang,
        tuNgay  : timTuNgay,
        denNgay : timDenNgay
      }
      $('#hienThiDonHang').load(url,data);
    });
});
//----------------------------------------------------------
$(document).ajaxComplete(function(){
  $('.btn-capNhatDH').click(function(){
    var maDH = $(this).val();
    var url = "../xuly/capnhatdonhang.php";
    var data = {
      maDonHang : maDH
    };
    var success = function(result){
        html = '';
      for (i in result) {
        html += '<div class="col-md-8 row"  style="padding-top:2vh; padding-bottom:2vh;">';
          html += result[i]['tenS'];
        html+= '</div>';
        html += '<div class="col-md-4"  style="padding-top:2vh; padding-bottom:2vh;">';
          html += '<input type="text" class="form-control" id= ';
          html += ('in' + result[i]['maS']);
          html +='  placeholder= ';
          html += result[i]['soLuongS'];
          html += '>';

          html += '<button type="button" class="btn btn-danger btn-xs btn-block btn-cnsltqldh" style="margin-top:2vh;" value=';
          html += result[i]['maS'];
          html += " id=btn";
          html += result[i]['maS'] + result[i]['maDH'];
          html += '>Cập nhật</button>';
        html +=  '</div>';
      }
      html2 = '<button type="button" class="btn btn-primary btn-xs btn-block btn-upDateTrangThai" value=';
      html2 += maDH;
      html2 += ' id=udtt';
      html2 += maDH;
      html2 += '>Cập nhật</button>';
      //-----------
      html3 = '<select class="form-control" name=op' + maDH + '>';
      html3 +='<option  value="Đang chờ">Đang chờ</option>';
      html3 += '<option value="Đã xác nhận">Đã xác nhận</option>';
      html3 += '<option value="Đang chuyển hàng">Đang chuyển hàng</option>';
      html3 += '<option value="Hoàn tất">Hoàn tất</option>';
      html3 += '</select>';
      $('#markToAdd2').html(html);
      $('#markToAdd3').html(html2);
      $('#markToAdd4').html(html3);
      //---------------------------------------------
      $('.btn-upDateTrangThai').click(function(){
        var trThai = $('select[name=op'+maDH+']').val();
        var maDHang = $(this).val();
        var url = "../xuly/capnhatdonhang.php";
        var data = {
          trangThai : trThai,
          maDHU : maDHang
        }
        var success = function(result){
          console.log(result);
          $('#trangThai' + maDHang).html(result);
          $('#udtt'+ maDH).html('Thành công <i class="fa fa-check" aria-hidden="true"></i>');
        }
        var dataType = "text";
        $.post(url,data,success,dataType);
      });
      //---------------------------------------------
      $('.btn-cnsltqldh').click(function(){
        var maSanP = $(this).val();
        var soLuongUpDate = $('#in' + maSanP).val();
        var tongHoaDonCu;
        var donGiaSanPham;
        var soLuongCu;
        var tongHoaDonMoi;
        for(j in result){
          if (result[j]['maS'] == maSanP) {
            tongHoaDonCu = Number(result[j]['tongTien']);
            donGiaSanPham = Number(result[j]['donGiaSP']);
            soLuongCu =  Number(result[j]['soLuongS']);
            break;
          }
        }
        tongHoaDonMoi = ((tongHoaDonCu - donGiaSanPham*soLuongCu) + (soLuongUpDate*donGiaSanPham));
        tongSoLuong = Number(soLuongCu - soLuongUpDate);
        console.log(tongSoLuong);
        var url  = "../xuly/capnhatdonhang.php";
        var data = {
            maDonH : maDH,
            maSanPham : maSanP,
            soLuongM : soLuongUpDate,
            tongSoLuongM : tongSoLuong,
            capNhatTongHD : tongHoaDonMoi
        }
        var success = function(result){
          $('#tongDH'+maDH).html(tongHoaDonMoi);
          $('#maSP'+maSanP+maDH).html(soLuongUpDate);
          $('#btn' + maSanP + maDH ).html('Thành công <i class="fa fa-check" aria-hidden="true"></i>');
        };
        var dataType = "text";
        $.post(url,data,success,dataType);
      });
    }
    var dataType = "json";
    $.post(url,data,success,dataType);
    $('#capNhatDonHang').modal('show');
  });
});
//-------------------------------
$(document).ready(function(){
  $('.btn-capNhatDH').click(function(){
    var maDH = $(this).val();
    var url = "../xuly/capnhatdonhang.php";
    var data = {
      maDonHang : maDH
    };
    var success = function(result){
        html = '';
      for (i in result) {
        html += '<div class="col-md-8 row"  style="padding-top:2vh; padding-bottom:2vh;">';
          html += result[i]['tenS'];
        html+= '</div>';
        html += '<div class="col-md-4"  style="padding-top:2vh; padding-bottom:2vh;">';
          html += '<input type="text" class="form-control" id= ';
          html += ('in' + result[i]['maS']);
          html +='  placeholder= ';
          html += result[i]['soLuongS'];
          html += '>';

          html += '<button type="button" class="btn btn-danger btn-xs btn-block btn-cnsltqldh" style="margin-top:2vh;" value=';
          html += result[i]['maS'];
          html += " id=btn";
          html += result[i]['maS'] + result[i]['maDH'];
          html += '>Cập nhật</button>';
        html +=  '</div>';
      }
      html2 = '<button type="button" class="btn btn-primary btn-xs btn-block btn-upDateTrangThai" value=';
      html2 += maDH;
      html2 += ' id=udtt';
      html2 += maDH;
      html2 += '>Cập nhật</button>';
      //----
      html3 = '<select class="form-control" name=op' + maDH + '>';
      html3 +='<option  value="Đang chờ">Đang chờ</option>';
      html3 += '<option value="Đã xác nhận">Đã xác nhận</option>';
      html3 += '<option value="Đang chuyển hàng">Đang chuyển hàng</option>';
      html3 += '<option value="Hoàn tất">Hoàn tất</option>';
      html3 += '</select>';
      $('#markToAdd2').html(html);
      $('#markToAdd3').html(html2);
      $('#markToAdd4').html(html3);
      //---------------------------------------------
      $('.btn-upDateTrangThai').click(function(){
        var trThai = $('select[name=op'+maDH+']').val();
        var maDHang = $(this).val();
        var url = "../xuly/capnhatdonhang.php";
        var data = {
          trangThai : trThai,
          maDHU : maDHang
        }
        var success = function(result){
          console.log(result);
          $('#trangThai' + maDHang).html(result);
          $('#udtt'+ maDH).html('Thành công <i class="fa fa-check" aria-hidden="true"></i>');
        }
        var dataType = "text";
        $.post(url,data,success,dataType);
      });
      //---------------------------------------------
      $('.btn-cnsltqldh').click(function(){
        var maSanP = $(this).val();
        var soLuongUpDate = $('#in' + maSanP).val();
        var tongHoaDonCu;
        var donGiaSanPham;
        var soLuongCu;
        var tongHoaDonMoi;
        for(j in result){
          if (result[j]['maS'] == maSanP) {
            tongHoaDonCu = Number(result[j]['tongTien']);
            donGiaSanPham = Number(result[j]['donGiaSP']);
            soLuongCu =  Number(result[j]['soLuongS']);
            break;
          }
        }
        tongHoaDonMoi = ((tongHoaDonCu - donGiaSanPham*soLuongCu) + (soLuongUpDate*donGiaSanPham));
        tongSoLuong = Number(soLuongCu - soLuongUpDate);
        console.log(tongSoLuong);
        var url  = "../xuly/capnhatdonhang.php";
        var data = {
            maDonH : maDH,
            maSanPham : maSanP,
            soLuongM : soLuongUpDate,
            tongSoLuongM : tongSoLuong,
            capNhatTongHD : tongHoaDonMoi
        }
        var success = function(result){
          $('#tongDH'+maDH).html(tongHoaDonMoi);
          $('#maSP'+maSanP+maDH).html(soLuongUpDate);
          $('#btn' + maSanP + maDH ).html('Thành công <i class="fa fa-check" aria-hidden="true"></i>');
        };
        var dataType = "text";
        $.post(url,data,success,dataType);
      });
    }
    var dataType = "json";
    $.post(url,data,success,dataType);
    $('#capNhatDonHang').modal('show');
  });
});
//-------------------------------------------
$(document).ajaxComplete(function(){
  $('.btn-huyDH').click(function(){
    var maDHHuy = $(this).val();
    var url = "../xuly/capnhatdonhang.php";
    var data = {
        maDhDel : maDHHuy
    }
    var success =  function(result){
      console.log(result);
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//-------------------------------------
$(document).ready(function(){
  $('.btn-huyDH').click(function(){
    var maDHHuy = $(this).val();
    var url = "../xuly/capnhatdonhang.php";
    var data = {
        maDhDel : maDHHuy
    }
    var success =  function(result){
      console.log(result);
      $('#dhCt'+maDHHuy).remove();
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
