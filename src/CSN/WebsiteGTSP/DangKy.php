<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đăng Nhập</title>
</head>
<body>
<section class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 py-3">
                    <i class="fa-solid fa-truck-fast" style="font-size: 20px;"></i>
                    Freeship từ đơn 600k!!
                </div>
                <div class="col-md-3">
                <form id="search" action="./xuly_timkiem.php" method="POST">
                    <div class="form-group">
                    <div class="input-group py-2">
                        <input type="text" id="timkiem" name="timkiem" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                        <input type="submit" name = "sbSearch" class="btn" style="background-color: #9900cc" value = "Tìm Kiếm">
                    </div>
                    </div>
                </form>
                </div>
                <div class="col-md-3 py-1">
                    <i class="fa-solid fa-phone-volume"></i>
                    Hotline: <br>
                    <strong>0943316669</strong>
                </div>
            </div>
        </div>
</section>
<!--end-top-->
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 py-2">
                <a href="index.php"><img src="../Image/logo.png" alt="Logo" wight="40px" height="70px"></a>
            </div>
            <div class="col-md-9 py-3">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand d-none" href="./index.php" style="color: blueviolet;">Trang chủ</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item text-white">
                                    <a class="nav-link" href="./index.php" style="color: blueviolet">Trang Chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="GioiThieu.php" style="color: blueviolet;">Giới Thiệu</a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: blueviolet;">Sản Phẩm</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./aosomi.php" style="color: blueviolet; font-size: 14px; font-weight: bold;">Áo Sơ Mi</a></li>
                                    <li><a class="dropdown-item" href="./vest.php" style="color: blueviolet; font-size: 14px; font-weight: bold;">Vest</a></li>
                                    <li><a class="dropdown-item" href="./quanau.php" style="color: blueviolet; font-size: 14px; font-weight: bold;">Quần Âu</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="LienHe.html" style="color: blueviolet;">Liên Hệ</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link" href="DangKy.php" style="color: blueviolet;">Đăng Nhập</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--end-header-->
<section class="menu" style="background-color: #9900cc">
    <div class="container">
        <div class="prodTitle">
            <div class="row">
                <div class="col-md-12 col-12">
                <div class="titleTop">
                    <span><a href="index.php">Trang Chủ › </a></span>
                    <span><a href="GioiThieu.html">Giới Thiệu</a></span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-menu-->
<section class="content">
    <div class="container">
        <div class="row">
        <p>&nbsp;</p>
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-3">
                <div class="form-container">
                    <div class="form-header">
                        <h2>Đăng Nhập</h2>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-body">
                        <form action="xuly_dangnhap.php" method="post">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="email" class="form-label"><i class="fa-regular fa-envelope"></i>Email</label>
                                    <input type="email" class="form-control" id="email" name = "email" placeholder="Nhập email">
                                </div>
                                <label for="Password" class="form-label"><i class="fa-solid fa-lock"></i>Password</label>
                                <input type="password" id="Password" name ="password" class="form-control" aria-describedby="Password"><br>
                                <input type="submit" name = "sbDangNhap" class="btn" style="background-color: #9900cc" value = "Đăng nhập" placeholder="Nhập password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
</section>
<!--end-content-->
<section class="footer bg-dark text-white py-4 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>THỜI TRANG LAVENDER</h4>
                    <p>Thời trang công sở Lavender</p>
                    <p class="m-0">
                        <strong>Trụ sở:</strong>
                        Số 1, ngõ 40/12 Ngọc Trục, Đại Mỗ, Nam Từ Liêm, Hà Nội
                    </p>
                    <p class="m-0">
                        <strong>Điện thoại:</strong>
                        <a href="tel:0943 316 669 / 0356875809">0943 316 669 / 0356875809</a>
                    </p>
                    <p>
                        <strong>Email:</strong>
                        info@thoitranglavender.com
                    </p>
            </div>
            <div class="col-md-3">
                <h4>TIN TỨC</h4>
                <ul>                                             
                    <li>
                        <a href="GioiThieu.html">Giới thiệu</a>
                    </li>                                  
                    <li>
                        <a href="LienHe.html">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>DANH MỤC SẢN PHẨM</h4>
                <ul>                                             
                    <li>
                        <a href="./aosomi.php">Áo sơ mi</a>
                    </li>                                  
                    <li>
                        <a href="./vest.php">Vest</a>
                    </li>
                    <li>
                        <a href="./quanau.php">Quần âu</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>THÔNG TIN CÁ NHÂN</h4>
                    <p class="m-0"> 
                        <strong>Họ tên: </strong>
                        Cao Thị Thúy Vy
                    </p>
                    <p class="m-0">
                        <strong>MSSV: </strong>
                        110121133
                    </p>
                    <p class="m-0">
                        <strong>Lớp: </strong>
                        DA21TTB
                    </p>
                    <p class="m-0">
                        <strong>Emai:</strong>
                        110121133@st.tvu.edu.vn
                    </p>
            </div>
        </div>
    </div>
</section>
<!--footer-->
</body>
</html>