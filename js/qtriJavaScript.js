$(document).ready(function(){
  CKEDITOR.replace( 'noiDungBaiViet');
  CKEDITOR.config.height = '450px';
});
//------------------------------------
$(document).ready(function(){
  CKEDITOR.replace( 'upDateNoiDungBv');
  CKEDITOR.config.height = '450px';
});
//------------------------------------
$(document).ready(function(){
    $( "#timTuNgay" ).datepicker({
      dateFormat: 'yy-mm-dd'
    });
    $( "#timDenNgay" ).datepicker({
      dateFormat: 'yy-mm-dd'
    });
});
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
      console.log(result);
      if (result == 'Dang nhap khong thanh cong') {
        $("#saiThongTinDN").modal('show');
      }
      else {
        window.location.replace("/TTCNv2/hienThi/quantri.php");
      }
    };
      $.post(url, data, success, dataType);
//---------------------------------------------
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
                if (result == "Chua the xoa san pham") {
                    $('#xoaSPKhongThanhCong').modal('show');
                }
                else {
                  $('#sanPh'+idSPX2).remove();
                  $('#xoaSPThanhCong').modal('show');
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
  var url = "../xuLy/xoasanpham.php";
  var data = {
    maSPX : idSPX
  };
  var success = function(result){
    if (result == "Chua the xoa san pham") {
        $('#xoaSPKhongThanhCong').modal('show');
    }
    else {
      $('#sanPh'+idSPX).remove();
      $('#xoaSPThanhCong').modal('show');
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
    //------------------
      if (tenLoaiSP == '') {
        $("#tenLoaiSP").tooltip('show');
      }
    //------------------
      else {
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
                  window.location.replace("/TTCNv2/hienThi/quantri.php?page=quanlyloaisanpham");
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
      }
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
            $('#suaNguoiDung').collapse('hide');
            function myResetFunction() {
                setTimeout(function(){
                  window.location.replace("/TTCNv2/hienThi/quantri.php?page=suaxoanguoidung");
                }, 1000);
            }
            myResetFunction();
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
          if (result == 'You cannot delete this user') {
              $('#xoaTaiKhoanKhongThanhCong').modal('show');
          }
          else {
            $('#nguoiDung'+maTkDel).remove();
            $('#xoaTaiKhoanThanhCong').modal('show');
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
    $('#timTuNgay').change(function(){
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
      $('#timDenNgay').change(function(){
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
      var callback = function(){
        $('.btn-huyDH').click(function(){
          if (confirm("Bạn chắc chắn muốn hủy đơn hàng ?") == true) {
            var maDHHuy = $(this).val();
            var url = "../xuly/capnhatdonhang.php";
            var data = {
                maDhDel : maDHHuy
            }
            var success =  function(result){
              $('#dhCt'+maDHHuy).remove();
            }
            var dataType = "text";
            $.post(url,data,success,dataType);
          }
        });
      }
      var url = "../xuly/locdonhang.php";
      var data = {
        timTheoTinhTrang : timTinhTrang,
        timTrongTuanThang : timTuanThang,
        tuNgay  : timTuNgay,
        denNgay : timDenNgay
      }
      $('#hienThiDonHang').load(url,data,callback);
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
/*$(document).ajaxComplete(function(){
  $('.btn-huyDH').click(function(){
      var maDHHuy = $(this).val();
      var url = "../xuly/capnhatdonhang.php";
      var data = {
          maDhDel : maDHHuy
      }
      var success =  function(result){
        $('#dhCt'+maDHHuy).remove();
      }
      var dataType = "text";
      $.post(url,data,success,dataType);
  });
});*/
//-------------------------------------
$(document).ready(function(){
  $('.btn-huyDH').click(function(){
          var maDHHuy = $(this).val();
            if (confirm("Bạn chắc chắn muốn hủy đơn hàng ?") == true) {
              var url = "../xuly/capnhatdonhang.php";
              var data = {
                  maDhDel : maDHHuy
              }
              var success =  function(result){
                $('#dhCt'+maDHHuy).remove();
              }
              var dataType = "text";
              $.post(url,data,success,dataType);
        }
    });
});
//---------------------------------------
$(document).ready(function(){
    $('#btn-ThemBv').click(function(){
        var tDe = $('#tieuDeBaiViet').val();
        var nDung = CKEDITOR.instances.noiDungBaiViet.getData();
        var url = "../xuly/xulythembaiviet.php";
        var data = {
          tieuDe : tDe,
          noiDung : nDung
        }
        var success = function(result){
            if (result == 'Them bai viet thanh cong') {
                $('#themBaiVietThanhCong').modal('show');
            }
        }
        var dataType = "text";
        $.post(url,data,success,dataType);
    });
});
//------------------------------------
$(document).ready(function(){
      var url =  "../xuly/xulydothi.php";
      var data = {
        tuan : "loc theo tuan"
      }
      var success = function(result){
        new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
          labels: ["Thứ hai","Thứ ba","Thứ 4","Thứ năm","Thứ 6","Thứ 7","Chủ nhật"],
          datasets: [{
              data: result['caq'],
              label: "Cây ăn quả",
              borderColor: "#3e95cd",
              fill: false
            }, {
              data: result['cln'],
              label: "Cây lấy gỗ",
              borderColor: "#8e5ea2",
              fill: false
            }, {
              data: result['ctt'],
              label: "Cây công trình",
              borderColor: "#3cba9f",
              fill: false
            }, {
              data: result['hcc'],
              label: "Hoa - Cây cảnh",
              borderColor: "#e8c3b9",
              fill: false
            }, {
              data: result['tongTuan'],
              label: "Tổng doanh thu",
              borderColor: "#c45850",
              fill: false
            }
          ]
        },
        options: {
          title: {
            display: true,
            text: 'Thống kê doanh thu tuần (đơn vị vnđ)'
          }
        }
      });
      };
      var dataType = "json";
      $.post(url,data,success,dataType);
});
//-----------------------------------------------------------
$(document).ready(function(){
  $('#themKhq').click(function(){
    var tenkhq = $('#tenKhq').val();
    var diaChiKhq = $('#diaChiKhq').val();
    var soDtKhq = $('#soDtKhq').val();
    var emailKhq = $('#emailKhq').val();
    var inn = '';
    var url = "../xuly/themkhachhangquen.php";
    var data = {
        ten : tenkhq,
        diaChi : diaChiKhq,
        soDT : soDtKhq,
        email : emailKhq
    }
    var success = function(result){
        $('#btn-reset-khq').click();
        $('#themKhqThanhCong').modal('show');
        //-------------------
        inn += '<div class="col-md-12 khachQuen"><div class="col-md-2">';
        inn +=  tenkhq;
        inn += '</div><div class="col-md-4">';
        inn +=  diaChiKhq;
        inn += '</div><div class="col-md-2">';
        inn += soDtKhq;
        inn += '</div><div class="col-md-3">';
        inn += emailKhq;
        inn += '</div><div class="col-md-1"><button type="button" class="btn btn-xs btn-danger suaKQ" value=';
        inn += result;
        inn += '>Sửa</button></div></div>';
        //-------------------
        $('#dsKhachQuen').append(inn);
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//------------------------------------------------------
$(document).ready(function(){
  $('#btn-themKhachQuen').click(function(){
    $('#btn-themKhachQuen').attr('class','btn btn-info');
    $('#xemTatCaKhachHang').attr('class','btn btn-default');
    $('#xemDsKhachQuen').attr('class', 'btn btn-default');
    $('#suaKhachQuen').collapse('hide');
    $('#themKhachQuen').collapse('show');
  });
});
//------------------------------------------------------
$(document).ready(function(){
  $('.suaKQ').click(function(){
    $('#themKhachQuen').collapse('hide');
    $('#suaKhachQuen').collapse('show');
    var idKhachQuen = $(this).val();
    var url = "../xuly/laythongtinkhq.php";
    var data = {
      idkq : idKhachQuen
    }
    var success = function(result){
      $('#suaTenKhq').attr('placeholder',result['tenKhq']);
      $('#suaDiaChiKhq').attr('placeholder',result['diaChiKh']);
      $('#suaSoDtKhq').attr('placeholder',result['soDtKh']);
      $('#suaEmailKhq').attr('placeholder',result['emailkh']);
      $('#btn-suaKhq').attr('value',idKhachQuen);
    }
    var dataType = 'json';
    $.post(url,data,success,dataType);
  });
});
//----------------------
$(document).ajaxComplete(function(){
  $('.suaKQ').click(function(){
    $('#themKhachQuen').collapse('hide');
    $('#suaKhachQuen').collapse('show');
    var idKhachQuen = $(this).val();
    var url = "../xuly/laythongtinkhq.php";
    var data = {
      idkq : idKhachQuen
    }
    var success = function(result){
      $('#suaTenKhq').attr('placeholder',result['tenKhq']);
      $('#suaDiaChiKhq').attr('placeholder',result['diaChiKh']);
      $('#suaSoDtKhq').attr('placeholder',result['soDtKh']);
      $('#suaEmailKhq').attr('placeholder',result['emailkh']);
      $('#btn-suaKhq').attr('value',idKhachQuen);
    }
    var dataType = 'json';
    $.post(url,data,success,dataType);
  });
});
//----------------SUA THONG TIN KHACH QUEN-----------------------
$(document).ready(function(){
  $('#btn-suaKhq').click(function(){
    var suaTenKhq = $('#suaTenKhq').val();
    var suaDiaChiKhq = $('#suaDiaChiKhq').val();
    var suaSoDtKhq = $('#suaSoDtKhq').val();
    var suaEmailKhq = $('#suaEmailKhq').val();
    var idKhachQuen = $(this).val();
    var url = "../xuly/suakhachquen.php";
    var data = {
          idUpDate : idKhachQuen,
          tenUpDate : suaTenKhq,
          diaChiUpDate : suaDiaChiKhq,
          soDtUpDate : suaSoDtKhq,
          emailUpDate :  suaEmailKhq
    }
    var success = function(result){
        console.log(result);
        if (result == 'Chinh sua thanh cong') {
            $('#suaKhqThanhCong').modal('show');
        }
        function myFunction() {
            setTimeout(function(){
              window.location.replace("/TTCNv2/hienThi/quantri.php?page=dskhachhang");
            }, 1000);
        }
        myFunction();
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//-----------------------------------
$(document).ready(function(){
  $('.btn-suaBaiViet').click(function(){
    $('#suaBaiBaiViet').collapse('show');
    var id = $(this).val();
    var td =   $('#tieuDe'+ id).text();
    var url = "../xuly/xulysuabaiviet.php";
    var data = {
      idBv : id
    }
    var success = function(result){
      $('#upDateTieuDeBv').text(td);
      CKEDITOR.instances['upDateNoiDungBv'].setData(result);
      $('#btn-suaBv').attr('value',id);
    };
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//----------------------------------
$(document).ready(function(){
  $('#btn-suaBv').click(function(){
    var id = $('#btn-suaBv').val();
    var tieuDeMoi = $('#upDateTieuDeBv').val();
    var noiDungMoi = CKEDITOR.instances.upDateNoiDungBv.getData();
    console.log(id);
    console.log(tieuDeMoi);
    var url = "../xuly/xulysuabaiviet.php";
    var data = {
        idUpDate : id,
        upDateTieuDe : tieuDeMoi,
        upDateNoiDung : noiDungMoi
    }
    var success = function(result){
      if (result == 'Sua bai viet thanh cong') {
          $('#suaBaiVietThanhCong').modal('show');
      }
      function myFunction() {
          setTimeout(function(){
            window.location.replace("/TTCNv2/hienThi/quantri.php?page=suabaiviet");
          }, 1000);
      }
      myFunction();
    }
    var dataType = "text";
    $.post(url,data,success,dataType);
  });
});
//-------------------------------------
$(document).ready(function(){
  $('#xemDsKhachQuen').click(function(){
      var url = "../xuly/dskhachquen.php";
      var callback = function(){
        $('#xemTatCaKhachHang').attr('class','btn btn-default');
        $('#xemDsKhachQuen').attr('class', 'btn btn-info');
        $('#btn-themKhachQuen').attr('class','btn btn-default');
        $('#suaKhachQuen').collapse('hide');
        $('#themKhachQuen').collapse('hide');
      }
      $('#dsKhachQuen').load(url,callback);
  });
});
//---------------------------------------
$(document).ready(function(){
      $('#xemTatCaKhachHang').click(function(){
        var url = "../xuly/dstatcakhachhang.php";
        var callback = function(){
          $('#xemTatCaKhachHang').attr('class','btn btn-info');
          $('#xemDsKhachQuen').attr('class', 'btn btn-default');
          $('#btn-themKhachQuen').attr('class','btn btn-default');
          $('#suaKhachQuen').collapse('hide');
          $('#themKhachQuen').collapse('hide');
        };
        $('#dsKhachQuen').load(url,callback);
      });
});
//---------------------------------------
$(document).ready(function(){
  $('#xemSpSapHet').click(function(){
      var url = "../xuly/dssaphet.php";
      var callback = function(){
        $('#xemTonKhoTongQuat').attr('class','btn btn-default');
        $('#xemSpDaHet').attr('class','btn btn-default');
        $('#xemSpSapHet').attr('class','btn btn-info');
      }
      $('#hienThiTonKho').load(url,callback);
  });
});
//---------------------------------------
$(document).ready(function(){
    $('#xemSpDaHet').click(function(){
      var url = "../xuly/dsdahet.php";
      var callback = function(){
        $('#xemTonKhoTongQuat').attr('class','btn btn-default');
        $('#xemSpSapHet').attr('class','btn btn-default');
        $('#xemSpDaHet').attr('class','btn btn-info');
      }
      $('#hienThiTonKho').load(url,callback);
    });
});
///-------------------------------------
$(document).ready(function(){
    $('#xemTonKhoTongQuat').click(function(){
      var url = "../xuly/dstktongquan.php";
      var callback = function(){
        $('#xemSpSapHet').attr('class','btn btn-default');
        $('#xemSpDaHet').attr('class','btn btn-default');
        $('#xemTonKhoTongQuat').attr('class','btn btn-info');
      }
      $('#hienThiTonKho').load(url,callback);
    });
});
//-------------------------------------
$(document).ready(function(){
  $('#btn-doiMatKhau').click(function(){
    var matKhauCu = $('#matKhauCu').val();
    var matKhauMoi = $('#matKhauMoi').val();
    var xacNhanMatKhauMoi = $('#xacNhanMatKhauMoi').val();
    if (matKhauMoi != xacNhanMatKhauMoi) {
        $('#khongTrungXacNhanmatKhau').modal('show');
    }
    else {
      var url = "../xuLy/xulydoimatkhau.php";
      var data = {
        matKC : matKhauCu,
        matKM : matKhauMoi
      }
      var success = function(result){
          console.log(result);
          if (result == 'Doi mat khau thanh cong') {
            $('#doiMatkhauthanhcong').modal('show');
          }
          else {
            $('#matKhauHienTaiSai').modal('show');
          }
      }
      var dataType = "text";
      $.post(url,data,success,dataType);
    }
  });
});
//--------------------------------------------
$(document).ready(function(){
  $('#thongKeDT').click(function(){
    $('#thongKeDoanhThuTB').modal('show');
  });
});
