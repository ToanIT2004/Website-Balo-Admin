<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <table class="table table-bordered">
            <thead>
               <tr class="text-center bg-info">
                  <th>Tên món hàng</th>
                  <th>Số lượng</th>
                  <th>Đơn giá</th>
                  <th>Tổng tiền</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $tong = 0;
                  if(isset($_GET['id'])) {
                     $id = $_GET['id'];
                  }
                  $hd = new hoadon();
                  $kq = $hd->getChiTietDon($id);
                  while($set = $kq->fetch()) {
                     $tong += $set['dongia']*$set['soluong'];
               ?>
               <tr class="text-center">
                  <td><img src="./Content/images/<?php echo $set['img']?>" style="width: 130px; height: 100px;"></td>
                  <td><?php echo $set['soluong']?></td>
                  <td><?php echo number_format($set['dongia'])?>đ</td>
                  <td><?php echo number_format($set['dongia']*$set['soluong'])?>đ</td>
               </tr>
               <?php }?>
               <tr>
                  <td colspan="3"><h4 class="mx-3">Tổng tiền:</h4></td>
                  <td>
                     <h4 class="text-danger text-center"><?php echo number_format($tong)?>đ</h4>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
      <a href="index.php?action=hoadon" class="fs-4">Trở lại</a>   

   </div>
</div>