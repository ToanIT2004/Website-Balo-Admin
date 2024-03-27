<?php 
   $act = 'lienhe';
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }


   switch($act) {
      case 'lienhe':
         include_once "./View/lienhe.php";
         break;
      case 'xuly':
         $nv = new khachhang();
         if(isset($_POST['xuly_action'])) {
            $id = $_POST['id'];
            $nv->xuly($id);
            echo "<script>alert('Đã xử lý')</script>";
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=lienhe"/>';

         }
         break;   
   }