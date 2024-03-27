<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="cart">
                <div class="cart-header">
                    <h3>DANH SÁCH KHÁCH HÀNG</h3>
                </div>
                <div class="cart-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center bg-info">
                                <th>NAME</th>
                                <th>GMAIL</th>
                                <th>PHONE</th>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>UPDATE</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $kh = new khachhang();
                            // $search = 0;
                            if (isset ($_GET['act']) && $_GET['act'] == 'timkiem') {
                                $search = $_POST['search'];
                                if (strlen($search) == 11 || strlen($search) == 10) {
                                    $kq = $kh->searchUserSdt($search);
                                } else {
                                    $kq = $kh->searchUserEmail($search);
                                }
                            }

                            if (isset ($_GET['action']) && $_GET['action'] == 'quanly' && !isset ($_GET['act'])) {
                                if(isset($_GET['page'])) {
                                    $get_trang = $_GET['page'];
                                }else {
                                    $get_trang = "";
                                }

                                if($get_trang == "" || $get_trang == 1) {
                                    $trang = 0;
                                }else {
                                    $trang = ($get_trang*6)-6;
                                }

                                $kq = $kh->getKH1to6($trang, 6);
                            }
                            if ($kq->rowCount() == 0) {
                                echo "<script>alert('Không tìm thấy kết quả')</script>";
                                echo "<meta http-equiv=refresh content='0, url=./index.php?action=quanly'";
                            }
                            while ($set = $kq->fetch()) {
                                ?>
                                <tr class="text-center">
                                    <td>
                                        <?php echo $set['tenkh'] ?>
                                    </td>
                                    <td>
                                        <?php echo $set['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $set['sodienthoai'] ?>
                                    </td>
                                    <td>
                                        <?php echo $set['taikhoan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $set['matkhau'] ?>
                                    </td>
                                    <td><a href="index.php?action=quanly&act=editkh&id=<?php echo $set['makh']; ?>"
                                            class="btn btn-warning">SỬA</a></td>
                                    <td><a href="index.php?action=quanly&act=deleteKH&id=<?php echo $set['makh']; ?>"
                                            class="btn btn-danger">XÓA</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php 
                                if(isset($get_trang)) {
                                    if($get_trang > 1) {
                                        echo "<li class='page-item'><a class='page-link text-dark' href='index.php?action=quanly&page=".($get_trang-1)."'>Trước</a></li>";
                                    }
                                }
                            ?>
                            <?php 
                                $a = $kh->getALL()->rowCount();
                                $ketqua = ceil($a/6);
                                for($i=1; $i<=$ketqua;$i++) { 
                            ?>
                            <li class="page-item"><a class="page-link text-dark" href="index.php?action=quanly&page=<?php echo $i?>"><?php echo $i?></a></li>
                            <?php }?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>