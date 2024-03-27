<div class="container">
   <div class="row mt-3">
      <div class="col-lg-12">
         <h4 class="mx-1">KHÁCH HÀNG LIÊN HỆ</h4>
         <table class="table table-bordered">
            <thead>
               <tr class="text-center bg-info">
                  <th>Tên KH</th>
                  <th>EMAIL</th>
                  <th>PHONE</th>
                  <th>CONTENT</th>
                  <th>HANDLE</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $kh = new khachhang();
                  $kq = $kh->lienhe();
                  while($set = $kq->fetch()) {
               ?>
               <tr class="text-center">
                  <td>
                     <?php echo $set['ten']?>
                  </td>
                  <td>
                     <?php echo $set['email']?>
                  </td>
                  <td>
                     <?php echo $set['sdt']?>
                  </td>
                  <td>
                     <?php echo $set['noidung']?>
                  </td>
                  <td>
                     <form method="POST" action="index.php?action=lienhe&act=xuly">
                        <input type="hidden" name="id" value="<?php echo $set['id']?>">
                        <button type="submit" name="xuly_action" class="btn btn-danger">ĐÃ XỬ LÝ</button>
                     </form>
                  </td>
               </tr>
               <?php }?>
            </tbody>
         </table>
      </div>
   </div>
</div>