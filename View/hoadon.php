<div class="container">
   <div class="row">
      <div class="col-lg-10 offset-md-1">
         <?php 
            $hd = new hoadon();
            $kq = $hd->getDonHang();
            while($set = $kq->fetch()) {
         ?>
         <div class="shadow-lg p-3 mb-3 bg-dark rounded">
            <span>Đơn hàng: <b class="text-warning"><?php echo $set['hoten']?></b></span>
            <span class="mx-5">Số điện thoại: <b class="text-warning">0<?php echo $set['sdt']?></b></span>
            <br>
            <span>Địa chỉ: <b class="text-warning"><?php echo $set['diachi']?></b></span>
            <br>
            <div class="d-flex mt-1">
               <a href="index.php?action=hoadon&act=xoadon&id=<?php echo $set['id']?>" class="btn btn-success mx-1">Đã giao</a>
               <a href="index.php?action=hoadon&act=chitiet&id=<?php echo $set['id']?>" class="btn btn-secondary mx-1">Chi tiết đơn</a>
            </div>
         </div>
         <?php }?>
      </div>
   </div>
</div>

<style>
   .bg-dark {
      opacity: 0.85;
   }
</style>