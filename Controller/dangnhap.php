<?php 

   $act = 'dangnhap';
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }

   switch($act) {
      case 'dangnhap': 
         include_once "./View/dangnhap.php";
         break;
      case 'dangnhap_action': 
         if($_SERVER['REQUEST_METHOD']=='POST') {
            $user = $_POST['txtUsername'];
            $pass = $_POST['txtPassword'];
            $nv = new nhanvien();
            $result = $nv->getAdmin($user, $pass);
            if($result!=false) {
               $_SESSION['admin']=$result[0];   
               echo '<script>alert("Đăng nhập thành công");</script>';
               // echo '<meta http-equiv=refresh content="0, url=./index.php?action=hanghoa';
               header("Location: index.php?action=danhmuc");
            }else {
               header("Location: index.php?action=dangnhap");
               echo '<script>alert("Đăng nhập không thành công");</script>';
            }
         }
         break;
      case 'dangxuat': 
         if(isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
            echo "<meta http-equiv=refresh content='0, url=./index.php'";
         }
         break;
      case 'doimatkhau':
         include_once "./View/doimatkhau.php";
         break;
      case 'change_action':
         if(isset($_POST['change_action'])) {
            $pass = $_POST['pass'];
            $newpass = $_POST['newpass'];
            $confirmpass = $_POST['confirmpass'];

            if(strlen($newpass) == 0 || strlen($confirmpass) == 0) {
               echo "<script>alert('Hãy nhập mật khẩu')</script>";
               echo "<meta http-equiv=refresh content='0, url=./index.php?action=dangnhap&act=doimatkhau'";
            }else if($newpass != $confirmpass) {
               echo "<script>alert('Mật khẩu không khớp')</script>";
               echo "<meta http-equiv=refresh content='0, url=./index.php?action=dangnhap&act=doimatkhau'";
            }
            else {
               $nv = new nhanvien();
               $kq = $nv->changePass($pass, $newpass, $_SESSION['admin']);
               if($kq) {
                  echo "<script>alert('Đổi mật khẩu thành công')</script>";
                  echo "<meta http-equiv=refresh content='0, url=./index.php?action=danhmuc'";
               }else {
                  echo "<script>alert('Mật khẩu cũ không đúng')</script>";
                  echo "<meta http-equiv=refresh content='0, url=./index.php?action=dangnhap&act=doimatkhau'";

               }
              
            }
         }
         // echo "Hello";
         break;
   }
