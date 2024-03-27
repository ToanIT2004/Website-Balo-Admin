<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <div class="cart">
            <div class="cart-header">
               <h2>CHỈNH SỬA KHÁCH HÀNG</h2>
            </div>
            <div class="cart-body">
               <?php 
                  if(isset($_GET['id'])) {
                     $id = $_GET['id'];
                  }
                  $kh = new khachhang();
                  $user = $kh->getUserID($id);
                  $tenkh = $user['tenkh'];
                  $email = $user['email'];
                  $sodienthoai = $user['sodienthoai'];
                  $taikhoan = $user['taikhoan'];
                  $matkhau = $user['matkhau'];

               ?>
               <form method="POST" action="index.php?action=quanly&act=action_edit&id=<?php echo $user['makh']?>">
                  <div class="form-group mb-3">
                     <label for="">Tên khách hàng: </label>
                     <input disabled value="<?php if(isset($tenkh)) echo $tenkh?>" type="text" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">Email: </label>
                     <input disabled value="<?php if(isset($email)) echo $email?>" type="text" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">Số điện thoại: </label>
                     <input disabled value="<?php if(isset($sodienthoai)) echo $sodienthoai?>" type="text" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">Tài khoản: </label>
                     <input disabled value="<?php if(isset($taikhoan)) echo $taikhoan?>" type="text" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">Mật khẩu: </label>
                     <input name="password" value="<?php if(isset($matkhau)) echo $matkhau?>" type="text" class="form-control">
                  </div>

                  <button name="action_edit" type="submit" class="btn btn-success w-100">SỬA</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>