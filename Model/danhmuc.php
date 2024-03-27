<?php 
   class danhmuc {
      function getProductAll() {
         $db = new connect();
         $select = "SELECT * FROM sanpham";
         $result = $db->getList($select);
         return $result;
      }

      // Lấy sản phẩm theo paginate
      function getProduct1to5($start, $limit) {
         $db = new connect();
         $select = "SELECT * FROM sanpham LIMIT $start, $limit";
         $result = $db->getList($select);
         return $result;
      }

      function insertProduct($ten, $gia, $hinh, $mota, $loai) {
         $db = new connect();
         $select = "INSERT INTO `sanpham`(`id`, `name`, `price`, `img`, `mota`, `idmenu`) 
         VALUES (Null,'$ten','$gia','$hinh','$mota','$loai')";
         $result = $db->exec($select);
         return $result;
      }

      function getProductID($id) {
         $db = new connect();
         $select = "SELECT * FROM sanpham WHERE id='$id'";
         $result = $db->getInstance($select);
         return $result;
      }

      function UpdateProductID($id ,$ten, $gia, $img, $mota, $loai) {
         $db = new connect();
         $select = "UPDATE `sanpham` SET `name`='$ten',`price`=$gia,`img`='$img',`mota`='$mota',`idmenu`=$loai WHERE id='$id'";
         $result = $db->exec($select);
         return $result;
      }

      function deleteProduct($id) {
         $db = new connect();
         $select = "DELETE FROM sanpham WHERE id='$id'";
         $db->exec($select);
      }
      
      function searchProduct($pro) {
         $db = new connect();
         $select ="SELECT * FROM sanpham WHERE name LIKE '%$pro%';";
         $result = $db->getList($select);
         return $result;
      }
   }
