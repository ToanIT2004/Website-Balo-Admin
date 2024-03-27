<?php 
   class loai {
      function getMenu() {
         $db = new connect();
         $select = 'SELECT * FROM menu';
         $result = $db->getList($select);
         return $result;
      }
   }
?>