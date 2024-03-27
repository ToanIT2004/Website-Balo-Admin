<?php
   $act = 'hoadon';
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }

   switch($act) {
      case "hoadon":
         include_once "./View/hoadon.php";
         break;
      case "chitiet":
         include_once "./View/chitiethoadon.php";
         break;
      case "xoadon":
         if(isset($_GET['id'])) {
            $id = $_GET['id'];
         }
         $hd = new hoadon();
         $hd->deleteDonHang($id);
         echo '<meta http-equiv=refresh content="0;url=./index.php?action=hoadon"/>';
         break;
   }