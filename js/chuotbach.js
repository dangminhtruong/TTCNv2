$(document).ajaxComplete(function(){
  $('.btn-capNhatDH').click(function(){
    var maDH = $(this).val();
    $('#capNhatDonHang').modal('show');
   var url = "../xuly/capnhatdonhang.php";
    var data = {
      maDonHang : maDH
    };
    var success = function(result){
        html = '';
      for (i in result) {
        html += '<tr>';
        html +=  '<td>';
        html +=  result[i]['tenS'];
        html +=  '</td>';
        html +=  '<td>';
        html +=  '<input type="text" class="form-control setSize" name="" placeholder='
        html += result[i]['soLuongS']
        html += '>';
        html +=  '</td>';
        if (i==0) {
          html +=  '<td>';
          html +=  '<select class="form-control" id="" name="">';
          html +=  '<option  value="Đang chờ">Đang chờ</option>';
          html +=  '<option  value="Đã xác nhận">Đã xác nhận</option>';
          html +=  '<option  value="Đang chuyển hàng">Đang chuyển hàng</option>';
          html +=  '<option  value="Hoàn tất">Hoàn tất</option>';
          html +=  '</select>';
          html +=  '</td>';
          html +=  '<td>';
          html += '<button type="button" class="btn btn-sm btn-primary" name="button">Cập nhật</button>';
          html +=  '</td>';
        }
        else {
          html +=  '<td>';
          html +=  '</td>';
        }
        html += '</tr>';
      }
      $('#markToAdd2').html(html);
    }
    var dataType = "json";
    $.post(url,data,success,dataType);
  });
});
<div class="modal fade bs-example-modal-sm" id="capNhatDonHang" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <th>Tình trạng</th>
          <th>Lựa chọn</th>
        </tr>
      </thead>
      <tbody id="markToAdd2">
      </tbody>
    </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
    </div>
  </div>
</div>
