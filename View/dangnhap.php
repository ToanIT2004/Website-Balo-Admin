<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <form action="index.php?action=dangnhap&act=dangnhap_action" method="POST">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>Đăng Nhập Tài Khoản</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="txtUsername" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input name="txtPassword" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="">Forgot Password</a>
                        </div>
                        <button name="login" type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>