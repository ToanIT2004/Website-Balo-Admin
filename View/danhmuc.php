<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <h4>DANH MỤC SẢN PHẨM</h4>
                <a href="index.php?action=danhmuc&act=add_sp" class="mt-2">THÊM SẢN PHẨM</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-info">
                        <th>ID</th>
                        <th>TÊN</th>
                        <th>GIÁ</th>
                        <th>HÌNH</th>
                        <th>MÔ TẢ</th>
                        <th>ID MENU</th>
                        <th>CẬP NHẬT</th>
                        <th>XÓA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $j = 0;
                        $sp = new danhmuc();
                        if(isset($_GET['act']) && $_GET['act'] == 'timkiem') {
                            $search = $_POST['search'];
                            $kq = $sp->searchProduct($search);
                        }

                        if(isset($_GET['action']) && $_GET['action'] == 'danhmuc' && !isset($_GET['act'])) {
                            if(isset($_GET['page'])) {
                                $get_trang = $_GET['page'];
                            }else {
                                $get_trang = "";
                            }

                            if($get_trang == "" || $get_trang == 1) {
                                $trang = 0;
                            }else { 
                                $trang = ($get_trang*5)-5;
                            }
                            $kq = $sp->getProduct1to5($trang, 5);
                        }

                        if($kq->rowCount() == 0) {
                            echo "<script>alert('Không tìm thấy kết quả')</script>";
                            echo "<meta http-equiv=refresh content='0, url=./index.php?action=danhmuc'";
                        }
                        while($set=$kq->fetch()) {
                        $j++
                    ?>
                    <tr class="text-center">
                        <td>
                            <?php echo $j?>
                        </td>
                        <td>
                            <?php echo $set['name'];?>
                        </td>
                        <td>
                            <?php echo number_format($set['price']);?>
                        </td>
                        <td>
                            <img style="width: 100px; height: 100px" src="./Content/images/<?php echo $set['img']?>" alt="">
                        </td>
                        <td>
                            <?php echo $set['mota'];?>
                        </td>
                        <td>
                            <?php echo $set['idmenu'];?>
                        </td>
                        <td>
                            <a href="index.php?action=danhmuc&act=update&id=<?php echo $set['id']?>" class="btn btn-warning">UPDATE</a>
                        </td>
                        <td>
                            <a href="index.php?action=danhmuc&act=delete&id=<?php echo $set['id']?>" class="btn btn-danger">XÓA</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

            <!-- Paginate -->
            <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                <ul class="pagination">
                    <?php 
                        if(isset($get_trang)) {
                            if($get_trang > 1) {
                                echo "<li class='page-item mx-1'><a style='border-radius: 30px;' class='page-link text-dark' href='index.php?action=danhmuc&page=".($get_trang-1)."'>Trước</a></li>";
                            }
                        }
                    ?>
                    <?php 
                        $products = $sp->getProductAll()->rowCount();
                        $a = ceil($products/5);
                        for($i = 1; $i<=$a; $i++) {
                    ?>
                    <li class="page-item mx-1"><a class="page-link text-dark" style="border-radius: 30px;" href="index.php?action=danhmuc&page=<?php echo $i?>"><?php echo $i?></a></li>
                    <?php }?>
                </ul>
            </nav>

        </div>
    </div>
</div>