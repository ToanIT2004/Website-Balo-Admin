<?php
session_start();
include_once "./Model/connect.php";
include_once "./Model/nhanvien.php";
include_once "./Model/danhmuc.php";
include_once "./Model/loai.php";
include_once "./Model/khachhang.php";
include_once "./Model/hoadon.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>DASHMIN - Bootstrap Admin Template</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">

   <!-- Favicon -->
   <link href="./Content/img/favicon.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="./Content/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="./Content/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

   <!-- Customized Bootstrap Stylesheet -->
   <link href="./Content/css/bootstrap.min.css" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="./Content/css/style.css" rel="stylesheet">
</head>

<body>
   <?php
      if(isset($_SESSION['admin'])) {
         include "./View/header.php";
      }
   ?>

   <!-- Phần body -->
   <?php
   if(isset($_SESSION['admin'])) {
      $ctrl = "danhmuc";
   }else {
      $ctrl = "dangnhap";
   }
   if (isset($_GET['action'])) {
      $ctrl = $_GET['action'];   
   }
   include 'Controller/'.$ctrl.'.php';
   ?>


   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./Content/lib/chart/chart.min.js"></script>
   <script src="./Content/lib/easing/easing.min.js"></script>
   <script src="./Content/lib/waypoints/waypoints.min.js"></script>
   <script src="./Content/lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="./Content/lib/tempusdominus/js/moment.min.js"></script>
   <script src="./Content/lib/tempusdominus/js/moment-timezone.min.js"></script>
   <script src="./Content/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

   <!-- Template Javascript -->
   <script src="./Content/js/main.js"></script>
</body>

</html>