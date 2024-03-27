<?php 
   class nhanvien {
      function getAdmin($user, $pass) {
         $db = new connect();
         $select = "SELECT kh.taikhoan, kh.matkhau FROM nhanvien kh WHERE taikhoan='$user' AND matkhau='$pass'";
         $result = $db->getList($select); // Trả về table
         $set = $result->fetch(); // Trỏ thẳng vảo từng row thÌ nó thành 1 array
         return $set;
      }

      function changePass($oldpass, $newpass, $tk) {
         $db = new connect();
         $select = "UPDATE nhanvien SET matkhau='$newpass' WHERE taikhoan='$tk' AND matkhau='$oldpass'";
         $result = $db->exec($select);
         return $result;
      }
   }
