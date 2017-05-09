<!------------------------------------------------------------------->
  <div class="col-md-10" id="qtriRight">
    <!------------------------------------------------------>
    <div class="modal fade bs-example-modal-sm" id="suaTaiKhoanThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Sửa tài khoản thành công !</strong>
        </div>
      </div>
    </div>
    <!------------------------------------------------------>
    <div class="modal fade bs-example-modal-sm" id="xoaTaiKhoanThanhCong" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <strong>Xóa tài khoản thành công !</strong>
        </div>
      </div>
    </div>
    <!------------------------------------------------------>
    <div class="col-md-12" id="themSanPhamMoi">
     <div class="well well-sm"><span id="themCayTb">Sửa xóa người dùng</span></div>
    </div>
   <div class="col-md-12 table-responsive myscroll2">
       <table class="table table-hover myscroll3">
        <thead>
          <tr>
            <th>Lựa chọn</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $showUser = new database();
            $showUser->connectDb();
            $sql = "SELECT taikhoan.tenTK, taikhoan.matKhau, nhanvien.hoTenNV, nhanvien.diaChiNV,nhanvien.maTK
                    FROM nhanvien INNER JOIN taikhoan ON nhanvien.maTK = taikhoan.maTK";
            $showUser->myQuery($sql);
            while ($rows = $showUser->fetchData()) {
          ?>
          <tr>
            <td>
              <button type="button" class="btn btn-default btn-xs btn-editUser" <?php echo "value=".$rows['maTK'] ?> >
                Sửa
              </button>
              <button type="button" class="btn btn-danger btn-xs btn-deleteUser" <?php echo "value=".$rows['maTK'] ?> >
                Xóa
              </button>
            </td>
            <td><?php echo $rows['tenTK'] ?></td>
            <td><?php echo $rows['matKhau'] ?></td>
            <td><?php echo $rows['hoTenNV'] ?></td>
            <td><?php echo $rows['diaChiNV'] ?></td>
          </tr>
          <?php
            }
            $showUser->freeQuery();
            $showUser->disconnectDb();
          ?>
        </tbody>
    </table>
   </div>
   <div class="collapse" id="suaNguoiDung">
    <!-------------->
     <div class="col-md-12" id="themSanPhamMoi">
      <div class="well well-sm"><span id="">Cập nhật thông tin mới</span></div>
     </div>
   <!--------------->
     <div class="col-md-12">
       <!-------------------->
       <div class="col-md-6">
         <div class="col-md-12">
         <form class="form-horizontal" role="form" id="formSuaNguoiDung">
           <div class="form-group">
             <label class="control-label" id="">Loại tài khoản: </label>
             <div class="">
               <select class="form-control" name="upDateLoaiTaiKhoanND">
                 <option value="0">Chủ cửa hàng</option>
                 <option value="1">Nhân viên</option>
               </select>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label" id="" >Họ tên:</label>
             <div class="">
               <input type="text" hidden id="upDateMaNV">
               <input type="text" class="form-control" name="" id="upDateTenND" placeholder="Nhập tên người dùng">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label" id="">Địa chỉ:</label>
             <div class="">
               <input type="text" class="form-control" name="" id="upDateDiaChiND" placeholder="Nhập địa chỉ">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label" id="">Số điên thoại:</label>
             <div class="">
               <input type="text" class="form-control" name="" id="upDateSoDienThoaiND" placeholder="Nhập số điện thoại">
             </div>
           </div>
         </form>
       </div>
       </div>
       <!------------------->
       <div class="col-md-6">
         <div class="col-md-12 form-horizontal" id="formSuaNguoiDung2">
             <div class="form-group">
               <label class="control-label" id="">Tên đăng nhập:</label>
               <div class="">
                 <input type="text" class="form-control" id="upDateTenDangNhapND" form="formSuaNguoiDung" placeholder="Nhập tên đăng nhập">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label">Mật khẩu: </label>
               <div class="">
                    <input type="text" class="form-control" id="upDateMatKhauND" form="formSuaNguoiDung" placeholder="Nhập mật khẩu">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label">Ghi chú: </label>
               <div class="">
                    <textarea class="form-control" rows="5" id="upDateGhiChuND" form="formSuaNguoiDung" placeholder="Thêm ghi chú tài khoản"></textarea>
               </div>
             </div>
             <div class="form-group" id="btnSuaNguoiDungGroup">
               <button type="button" id="submitSuaNguoiDung" class="btn btn-success" form="formSuaNguoiDung">
                 Hoàn tất
               </button>
               <button type="reset" id="resetSuaNguoiDung" class="btn btn-default" form="formSuaNguoiDung">
                 Reset
               </button>
             </div>
         </div>
       </div>
   </div>
 </div>
<!-------------------------->
</div>
