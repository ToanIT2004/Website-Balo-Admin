<?php 
   class hoadon {
      function getDonHang() {
         $db = new connect();
         $select = "SELECT * FROM donhang";
         $result = $db->getList($select);
         return $result;
      }

      function getChiTietDon($iddh) {
         $db = new connect();
         $select = "SELECT * FROM cart WHERE iddh=$iddh";
         $result = $db->getList($select);
         return $result;
      }

      // Đơn hàng đã giai
      function deleteDonHang($id) {
         $db = new connect();
         $select = "DELETE FROM donhang WHERE id=$id";
         $select1 = "DELETE FROM cart WHERE iddh=$id";
         $db->exec($select);
         $db->exec($select1);
      }
   }