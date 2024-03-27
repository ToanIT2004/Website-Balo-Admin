<?php 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sp = new danhmuc();
        $kq = $sp->getProductID($id);
        $tensp = $kq['name'];
        $giasp = $kq['price'];
        $img = $kq['img'];
        $motasp = $kq['mota'];
        $loai = $kq['idmenu'];
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <?php 
                        if(isset($_GET['id'])) {
                    ?>
                    <H5 class="text-center">UPDATE SẢN PHẨM</H5>
                    <?php }else {?>
                    <H5 class="text-center">THÊM SẢN PHẨM</H5>
                    <?php }?>
                </div>
                <?php 
                    if(isset($_GET['id'])) {
                    ?>
                    <form method="POST" action="index.php?action=danhmuc&act=update_action">
                    <?php }else {?>
                    <form method="POST" action="index.php?action=danhmuc&act=insert_sp">
                    <?php }?>
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <b>Tên sản phẩm</b>
                    <input type="text" value="<?php if(isset($tensp)) echo $tensp;?>" name="name" class="form-control mb-4">
                    <b>Giá tiền</b>
                    <input type="text" value="<?php if(isset($giasp)) echo $giasp;?>" name="price" class="form-control mb-4">
                    <b>Hình ảnh</b>
                    <input type="text" value="<?php if(isset($img)) echo $img;?>" name="img" class="form-control mb-4">
                    <b>Mô tả</b>
                    <?php 
                        if(isset($_GET['id'])) {
                    ?>
                    <textarea type="text"  name="description" class="form-control mb-4"  cols="45" rows="3"><?php if(isset($motasp)) echo $motasp;?></textarea> <br>
                    <?php }else {?>
                        <input type="text" value="<?php if(isset($motasp)) echo $motasp;?>" name="description" class="form-control mb-4">
                    <?php }?>
                    <b>Loại: </b>
                    <select name="type" class="w-50 mx-3" name="" id="">
                        <?php 
                            $l = new loai();
                            $kq = $l->getMenu();
                            // Xử lý selected UPDATE
                            $selectedLoai = -1;
                            if(isset($loai) && $loai!=-1) {
                                $selectedLoai = $loai;
                            }
                            while($set = $kq->fetch()):
                        ?>
                        <option <?php if($selectedLoai == $set['id']) echo 'selected'?> value="<?php echo $set['id']?>"><?php echo $set['name']?></option>
                        <?php endwhile?>
                    </select>
                </div>
                <div class="card-footer">
                    <button name="submit" type="submit" class="btn btn-primary w-100">Thực hiện</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>