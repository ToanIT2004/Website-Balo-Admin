<?php 
   class khachhang {
      function getALL() {
         $db = new connect();
         $select = "SELECT * FROM khachhang";
         $result = $db->getList($select);
         return $result;
      }

      function deleteKH($id) {
         $db = new connect();
         $select = "DELETE FROM khachhang WHERE makh='$id'";
         $db->exec($select); 
      }

      function getUserID($id) {
         $db = new connect();
         $select = "SELECT * FROM khachhang WHERE makh='$id'";
         $result = $db->getInstance($select);
         return $result;
      }

      function changePasswordUser($id, $pass) {
         $db = new connect();
         $select = "UPDATE `khachhang` SET matkhau='$pass' WHERE makh='$id'";
         $db->exec($select);
      }

      // Tìm kiếm khách hàng bằng email hoặc sđt
      function searchUserSdt($sdt) {
         $db = new connect();
         $select ="SELECT * FROM khachhang 
         WHERE sodienthoai = '$sdt'";
         $result = $db->getList($select);
         return $result;
      }

      function searchUserEmail($email) {
         $db = new connect();
         $select ="SELECT * FROM khachhang 
         WHERE email LIKE '%$email%'";
         $result = $db->getList($select);
         return $result;
      }

      // Phần liên hệ
      function lienhe() {
         $db = new connect();
         $select = "SELECT * FROM lienhekh";
         $result = $db->getList($select);
         return $result;
      }

      function xuly($id) {
         $db = new connect();
         $select = "DELETE FROM lienhekh WHERE id=$id";
         $db->exec($select);
      }

      // Pagenate KH
      function getKH1to6($start, $limit) {
         $db = new connect();
         $select = "SELECT * FROM khachhang LIMIT $start, $limit";
         $result = $db->getList($select);
         return $result;
      }
   }
