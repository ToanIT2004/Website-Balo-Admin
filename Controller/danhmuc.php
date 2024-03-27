<?php 
   $act='danhmuc';
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }

   switch($act) {
      case 'danhmuc':
         include_once "./View/danhmuc.php";
         break;
      case 'add_sp':
         include_once "./View/addsp.php";
         break;
      case 'insert_sp':
         if(isset($_POST['submit'])) {
            $ten = $_POST['name'];
            $gia = $_POST['price'];
            $hinh = $_POST['img'];
            $mota = $_POST['description'];
            $loai = $_POST['type'];
            $sp = new danhmuc();
            $checkct = $sp->insertProduct($ten, $gia, $hinh, $mota, $loai);
            if($checkct == true) {
               echo '<script>alert("Insert dữ liệu thành công")</script>';
               echo '<meta http-equiv=refresh content="0;url=./index.php?action=danhmuc"/>';
            }else {
               echo '<script>alert("Insert dữ liệu không thành công")</script>';
               echo '<meta http-equiv=refresh content="0;url=./index.php?action=danhmuc"/>';
            }
         }
         break;
      case 'update': 
         include_once "./View/addsp.php";
         break;
      case 'update_action':
         if(isset($_POST['submit'])) {
            $id = $_POST['id'];
            $ten = $_POST['name'];
            $gia = $_POST['price'];
            $hinh = $_POST['img'];
            $mota = $_POST['description'];
            $loai = $_POST['type'];
            $sp = new danhmuc();
            $sp->UpdateProductID($id, $ten, $gia, $hinh, $mota, $loai);
            echo '<script>alert("Update thành công");</>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=danhmuc"/>';
         }
         break;
      case 'delete': 
         if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sp = new danhmuc();
            $sp->deleteProduct($id);
            echo '<script>alert("Xóa thành công");</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=danhmuc"/>';
         }
         break;
      case 'timkiem': 
         if(isset($_POST['timkiem_submit'])) {
            $search = $_POST['search'];
            if(strlen($search) == 0) {
               echo '<meta http-equiv=refresh content="0, url=./index.php?action=quanly"';
            }else {
               include_once "./View/danhmuc.php";
            // echo '<meta http-equiv=refresh content="0, url=./index.php?action=quanly"';
            }
         }
   }
