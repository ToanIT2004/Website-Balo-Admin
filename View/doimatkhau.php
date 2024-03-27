<div class="container">
   <div class="row">
      <div class="col-lg-6">
         <div class="cart mt-3">
            <div class="cart-header">
               <h4 class="mx-3">ĐỔI MẬT KHẨU</h4>
            </div>
            <form action="index.php?action=dangnhap&act=change_action" method="POST">
               <div class="card-body">
                  <div class="form-group mb-3">
                     <!-- <label for="">Mật khẩu hiện tại</label> -->
                     <input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu hiện tại">
                  </div>
                  <div class="form-group mb-3">
                     <!-- <label for="">Mật khẩu mới</label> -->
                     <input type="password" name="newpass" class="form-control" placeholder="Nhập mật khẩu mới">
                  </div>
                  <div class="form-group">
                     <!-- <label for="">Nhập lại mật khẩu mới</label> -->
                     <input type="password" name="confirmpass" class="form-control" placeholder="Nhập lại mật khẩu mới">
                  </div>
                  <!-- <btn type="submit" name="change_action" class="btn btn-primary mx-3">Thay đổi</btn> -->
               </div>
               <div class="cart-body">
                  <button type="submit" name="change_action" class="btn btn-primary mx-3">Thay đổi</button>
               </div>
            </form>

         </div>
      </div>
   </div>
</div>