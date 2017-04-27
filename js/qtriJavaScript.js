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
//-----------------------------------------------------------------------------------------
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
