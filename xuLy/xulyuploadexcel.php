<?php
    session_start();
    include_once('..\PHPEx\Classes\PHPExcel\IOFactory.php');
    $connect = mysqli_connect("localhost", "root", "", "cuahangdunghanh");
    if(isset($_POST["import"]))
    {
      $file_path = $_FILES["excel"]["tmp_name"];
      $file_name = $_FILES["excel"]["name"];
      $file_type = $_FILES["excel"]["type"];
      $file_size = $_FILES["excel"]["size"];
      $file_errow = $_FILES["excel"]["error"];
     $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
     $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
     if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
     {
      $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
      include_once('..\PHPEx\Classes\PHPExcel\IOFactory.php'); // Add PHPExcel Library in this code
      $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

      foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
      {
       $highestRow = $worksheet->getHighestRow();
       for($row=2; $row<=$highestRow; $row++)
       {

        $ten = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
        $soLuong = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
        $gia = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
        $ma = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
        $moTa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
        $anh = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
        $soLuongDaBan = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
        $query = "INSERT INTO sanpham(tenSP,soLuongSP,giaSP,maLoaiSP,moTaSP,anhSP,soLuongDaBan)
        VALUES ('".$ten."', '".$soLuong."', '".$gia."', '".$ma."',
         '".$moTa."', '".$anh."', '".$soLuongDaBan."')";
        mysqli_query($connect, $query);
       }
      }
      header("location:../hienthi/quantri.php?page=themsanpham");
      $_SESSION['themSPThanhCong'] = 'success';
     }
     else
     {
       header("location:../hienthi/quantri.php?page=themsanpham");
       $_SESSION['themSPKhongThanhCong'] = 'no success';
     }
    }

?>
