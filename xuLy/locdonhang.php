<?php
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $dauTuan = date("Y-m-d", strtotime("last Monday"));
  $cuoiTuan = date("Y-m-d", strtotime("next Sunday"));
  $dauThang = date("Y-m-d", strtotime("first day of this month"));
  $cuoiThang = date("Y-m-d", strtotime("last day of this month"));
  $homNay =  date('Y/m/d');
  //---------------------------------------------------------------------
  ?>
    <?php
        include_once("../xuLy/__autoload.php");
        //-----------------------
        if ($_POST['timTrongTuanThang'] == 'timTrongTuan' && $_POST['timTheoTinhTrang'] !='null') {
          $trangThai = $_POST['timTheoTinhTrang'];
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE (donhang.ngaydathang BETWEEN '$dauTuan' AND '$cuoiTuan') AND donhang.trangthai ='$trangThai'";
        }
        elseif ($_POST['timTrongTuanThang'] == 'timTrongThang' && $_POST['timTheoTinhTrang'] !='null') {
          $trangThai = $_POST['timTheoTinhTrang'];
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE (donhang.ngaydathang BETWEEN '$dauThang' AND '$cuoiThang') AND donhang.trangthai ='$trangThai'";
        }
        elseif ($_POST['timTrongTuanThang'] == 'timTrongTuan' && $_POST['timTheoTinhTrang'] == 'null') {
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE donhang.ngaydathang BETWEEN '$dauTuan' AND '$cuoiTuan'";
        }

        elseif ($_POST['timTrongTuanThang'] == 'timTrongThang' && $_POST['timTheoTinhTrang'] == 'null') {
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE donhang.ngaydathang BETWEEN '$dauThang' AND '$cuoiThang'";
        }
        //-------------------------------------
        elseif ($_POST['tuNgay'] == null && $_POST['denNgay'] == null && $_POST['timTrongTuanThang'] == 'null' && $_POST['timTheoTinhTrang'] != 'null') {
          $trangThai = $_POST['timTheoTinhTrang'];
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE donhang.trangthai= '$trangThai'";
        }
        //-------------------------------------
        elseif ($_POST['tuNgay'] != null && $_POST['denNgay'] != null && $_POST['timTheoTinhTrang'] == "null") {
          $tuNgay = $_POST['tuNgay'];
          $denNgay = $_POST['denNgay'];
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE donhang.ngaydathang BETWEEN '$tuNgay' AND '$denNgay'";
        }
        elseif ($_POST['tuNgay'] != null && $_POST['denNgay'] != null && $_POST['timTheoTinhTrang'] !='null') {
          $tuNgay = $_POST['tuNgay'];
          $denNgay = $_POST['denNgay'];
          $trangThai = $_POST['timTheoTinhTrang'];
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE (donhang.ngaydathang BETWEEN '$tuNgay' AND '$denNgay') AND donhang.trangthai ='$trangThai'";
        }
        elseif ($_POST['tuNgay'] == null && $_POST['denNgay'] == null && $_POST['timTheoTinhTrang'] =='null' && $_POST['timTrongTuanThang'] == 'null') {
          $sql = "SELECT khachhang.tenkh, khachhang.diachi,khachhang.email, donhang.trangthai, donhang.tongthanhtoan,
          donhang.madh, donhang.ngaydathang, donhang.cachThanhToan,donhang.manv
          FROM donhang INNER JOIN khachhang
          ON (khachhang.makh = donhang.makh)
          WHERE donhang.ngaydathang = '$homNay'";
        }
        //-------------------
        $hienDH = new sanpham();
        $hienDH->myQuery($sql);
        if ($hienDH->numRows() > 0) {
          for ($i=0; $i <$hienDH->numRows() ; $i++) {
              $res = $hienDH->fetchData();
              $maDH = $res['madh'];
    ?>
    <div class="container-fluid donHang" <?php echo "id=dhCt".$maDH; ?>>
      <div class="col-md-3">
        <?php
            $hienDssp = new sanpham();
            $sql2 = "SELECT chitietdonhang.soluong, sanpham.tensp,sanpham.masp, donhang.madh FROM chitietdonhang INNER JOIN sanpham
            INNER JOIN donhang ON (chitietdonhang.masp = sanpham.maSP AND chitietdonhang.madh = donhang.madh)
            WHERE donhang.madh = $maDH";
            $hienDssp->myQuery($sql2);
            while ($res2 = $hienDssp->fetchData($sql2)) {
         ?>
          <?php echo $res2['tensp'] ?> <span class="badge" <?php echo "id=maSP".$res2['masp'].$res2['madh'] ?> > <?php echo $res2['soluong'] ?></span><br/>

          <?php
            }
          ?>
      </div>
      <div class="col-md-2">
          Mã đơn hàng: <?php  echo "DH-".$res['madh'];?> <br/>
          Tổng thanh toán:<br/> <span <?php echo "id=tongDH".$res["madh"] ?>><?php echo $res["tongthanhtoan"] ?></span><u>đ</u><br/>
          Ngày đặt hàng:<br/> <?php echo $res["ngaydathang"] ?><br/>
          <?php echo $res["cachThanhToan"] ;?>
      </div>
      <div class="col-md-3">
          Tên :<?php echo $res["tenkh"] ?><br/>
          Địa chỉ: <?php echo $res["diachi"] ?><br/>
          Email : <?php echo $res["email"]; ?>
      </div>
      <div class="col-md-2">
        <p <?php echo "id=trangThai".$res['madh'] ?>><?php
          if ($res["trangthai"] == "Đang chuyển hàng" || $res["trangthai"] == "Hoàn tất" || $res["trangthai"] == "Đã xác nhận") {
            echo $res["trangthai"]."<br/>";
             $hienNV = new user();
             $maNhanVien = $res['manv'];
             $sql10 = "SELECT hoTenNV FROM nhanvien WHERE maNV = '$maNhanVien'";
             $hienNV->myQuery($sql10);
             $tenNV= $hienNV->fetchData();
              echo "Nhân viên xử lý: <br/>".$tenNV['hoTenNV'];
          }
          else {
            echo $res["trangthai"];
          }
        ?></p>
      </div>
      <div class="col-md-2">
        <?php
            if ($res["trangthai"] == "Đang chuyển hàng" || $res["trangthai"] == "Hoàn tất" ) { ?>
                <button type="button" disabled class="btn btn-sm btn-primary btn-capNhatDH" <?php echo "value=". $res['madh'] ?>>Cập nhật</button>
                  <button type="button" disabled class="btn btn-sm btn-danger btn-huyDH" <?php echo "value=". $res['madh'] ?>>Hủy</button>
                  <a <?php echo "href=xuathoadon.php?madh=".$res['madh'];?> target="_blank">
                    <button type="button" class="btn btn-sm btn-default btn-xuatHD">Xuất hóa đơn</button>
                 </a>
      <?php
            }
          else{ ?>
            <button type="button" class="btn btn-sm btn-primary btn-capNhatDH" <?php echo "value=". $res['madh'] ?>>Cập nhật</button>
            <button type="button" class="btn btn-sm btn-danger btn-huyDH" <?php echo "value=". $res['madh'] ?>>Hủy</button>
            <a <?php echo "href=xuathoadon.php?madh=".$res['madh'];?> target="_blank">
              <button type="button" class="btn btn-sm btn-default btn-xuatHD">Xuất hóa đơn</button>
           </a>
        <?php  } ?>
      </div>
  </div>
  <?php
      }
  }
  ?>
