<?php 
   $act = 'quanly';
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }

   switch($act) {
      case 'quanly': 
         include_once "./View/danhsachkh.php";
         break;
      case 'editkh':
         include_once "./View/editkh.php";
         break; 
      case 'action_edit':
         if(isset($_POST['action_edit'])) {
            $id = $_GET['id'];
            $pass = $_POST['password'];
            $kh = new khachhang();
            $kh->changePasswordUser($id, $pass);
            echo "<script>alert('Thay đổi thành công')</script>";
            echo '<meta http-equiv=refresh content="0, url=./index.php?action=quanly"';
         }
         break;
      case 'deleteKH':
         if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $kh = new khachhang();
            $kh->deleteKH($id);
            echo "<script>alert('Xóa khách hàng thành công')</script>";
            echo '<meta http-equiv=refresh content="0, url=./index.php?action=quanly"';
         }

         break;
      case 'timkiem': 
         if(isset($_POST['timkiem_submit'])) {
            $search = $_POST['search'];
            if(strlen($search) == 0) {
               echo '<meta http-equiv=refresh content="0, url=./index.php?action=quanly"';
            }else {
               include_once "./View/danhsachkh.php";
            // echo '<meta http-equiv=refresh content="0, url=./index.php?action=quanly"';
            }
         }
   }
