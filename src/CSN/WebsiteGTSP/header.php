<?php
session_start();
if(!isset($_SESSION["email"]))
{
  header("Location:DangKy.php");
}
//Kết nối cơ sở dữ liệu
     include_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang quản trị Lavender </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-deep-purple.css">
</head>
<body>

<div class="p-5 text-white text-center" style="background-color: #33CC66">
  <h1>Welcome To Lavender Website Admin </h1>
</div>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #9932CC">
  <div class="container">
    <div class="col-md-3">
    <ul class="navbar-nav">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: #ffffff;">Quản lý dữ liệu</a>
        <ul class="dropdown-menu" style="background-color: #33CC66">
        <li><a class="dropdown-item" href="nguoidung.php">Người Dùng</a></li>
        <li><a class="dropdown-item" href="loaisanpham.php">Loại Sản Phẩm</a></li>
        <li><a class="dropdown-item" href="hinhanh.php">Hình Ảnh</a></li>
        <li><a class="dropdown-item" href="kichco.php">Kích Cỡ</a></li>
        <li><a class="dropdown-item" href="sanpham.php">Sản Phẩm</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="xemsp.php" style="color: #ffffff;">Xem sản phẩm</a>
      </li>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <p class="nav-item" style="color: #F1AF00;"> Xin Chào 
        <?php echo $_SESSION["email"];?>  
      <a class="nav-link" href="xuly_dangxuat.php?flag=1" style="color: #ffffff;">Đăng xuất</a>
      </p>
      </div>
    </ul>
    </div>
    </div>
  </div>
</nav>

<div class="container mt-5">