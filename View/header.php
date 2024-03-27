
    <div class="container-xxl position-relative bg-white d-flex p-0">



        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <h1 class="mb-0">MENU</h1>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Danh mục</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="index.php?action=danhmuc" class="dropdown-item">Sản phẩm</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Quản lý</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="index.php?action=quanly" class="dropdown-item">Khách hàng</a>
                            <a href="typography.html" class="dropdown-item">Nhân viên</a>
                        </div>
                    </div>
                    <a href="index.php?action=danhmuc&act=add_sp" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Thêm sản phẩm</a>
                    <!-- <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a> -->
                    <a href="index.php?action=hoadon" class="nav-item nav-link"><i class="bi bi-basket-fill me-2"></i>Hóa đơn</a>
                    <a href="index.php?action=lienhe" class="nav-item nav-link"><i class="bi bi-people-fill me-2"></i>Liên hệ</a>
                    <a href="index.php?action=dangnhap&act=doimatkhau" class="nav-item nav-link"><i class="bi bi-key-fill me-2"></i>Đổi mật khẩu</a>
                    <a href="index.php?action=dangnhap&act=dangxuat" class="nav-item nav-link"><i class="bi bi-box-arrow-right me-2"></i>Đăng xuất</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars text-dark"></i>
                </a>
                <?php 
                    if(isset($_GET['action']) && $_GET['action'] == 'quanly') {
                ?>
                <form method="POST" action="index.php?action=quanly&act=timkiem" class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" name="search" type="search" placeholder="Search">
                    <button name="timkiem_submit" type="submit" style="height: 35px" class="btn btn-primary mx-2">Tìm</button>
                </form>
                <?php }elseif(isset($_GET['action']) && $_GET['action'] == 'danhmuc') {?>
                <form method="POST" action="index.php?action=danhmuc&act=timkiem" class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" name="search" type="search" placeholder="Search">
                    <button name="timkiem_submit" type="submit" style="height: 35px" class="btn btn-primary mx-2">Tìm</button>
                </form>
                <?php }?>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                       <span>Admin</span>
                    </div>
                </div>
            </nav>
        

