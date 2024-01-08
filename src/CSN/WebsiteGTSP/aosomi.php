<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Áo Sơ Mi</title>
</head>
<body>
<?php
    include_once("./connect.php");
?>
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
                          <a class="navbar-brand d-none" href="index.php" style="color: blueviolet;">Trang chủ</a>
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
                                        <from>
                                        <li>
                                        <a class="dropdown-item" name="asm" href="./aosomi.php" style="font-size: 14px; color: blueviolet; font-weight: bold;"> Áo Sơ Mi</a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item" name="vest" href="./vest.php" style=" font-size: 14px; color: blueviolet; font-weight: bold;">Vest</a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item" name="qa" href="./quanau.php" style=" font-size: 14px; color: blueviolet; font-weight: bold;">Quần Âu</a>
                                        </li>
                                        </from>
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
                            <span><a href="#">Sản Phẩm › </a></span>
                            <span><a href="./aosomi.php">Áo Sơ Mi</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--end-menu-->
<section class="content mt-4">
    <div class="container">
        <div class="row">
        <div class="row mt-2">
            <div class="col-md-3">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2912.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi chấm bi tím tay lỡ A2912
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Áo sơ mi chấm bi tím tay lỡ A2912 với tông màu tím sang trọng, chi tiết bèo ngực độc đáo, kiểu dáng tay lỡ, cổ tròn thanh lịch, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 299000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2984.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi trắng cổ đức họa tiết hoa A2984
                  </h5><br>
                  <p class="card-title" style="text-align: center">Mô tả: Áo sơ mi trắng cổ đức họa tiết hoa A2984 với tông màu trắng basic nữ tính, cổ đức, họa tiết vải hoa phối tinh tế, độc đáo, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 299000 VNĐ</p>
                 
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2955.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi cổ tàu xanh tím A2955
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Áo sơ mi cổ tàu xanh tím A2955 với tông màu xanh tím kẻ sọc nữ tính, cổ tàu, tay bo kèm cúc cùng họa tiết hoa văn sọc được phối tinh tế, độc đáo, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 279000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2917.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi tơ hồng cổ bèo tay dài A2917
                  </h5><br>
                  <p class="card-title" style="text-align: center">Mô tả: Áo sơ mi tơ hồng cổ bèo tay dài A2917 với tông màu hồng nữ tính, kiểu dáng tay dài, cổ bèo độc đáo, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 299000 VNĐ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="container">
        <div class="row">
        <div class="row mt-2">
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2985.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi màu be họa tiết ngôi sao A2985
                  </h5><br>
                  <p class="card-title" style="text-align: center">Mô tả:Áo sơ mi màu be họa tiết ngôi sao A2985 với tông be phối họa tiết độc đáo cá tính, kiểu dáng tay dài, cổ nhún dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 315000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2956.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi xanh cốm gân ngực A2956
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Áo sơ mi xanh cốm gân ngực A2956 với tông xanh cốm độc đáo cá tính, kiểu dáng tay dài, cổ bẻ cùng họa tiết gân ngực độc đáo, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 279000 VNĐ</p>
                 
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2796.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi vàng cổ phối bèo tay dài chất lụa cao cấp A2796
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: 	Áo sơ mi vàng cổ phối bèo tay dài A2796 với tông màu vàng trẻ trung, sang chảnh, kiểu dáng tay dài, cổ sơ mi thanh lịch, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 229000 VNĐ</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/A2807.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo sơ mi xanh cô ban nhún ngực A2807
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Áo sơ mi xanh cô ban nhún ngực A2807 với tông màu xanh trẻ trung, sang chảnh, kiểu dáng tay ngắn, cổ sơ mi thanh lịch, dễ mặc dễ phốii</p>
                  <p class="card-title" style="text-align: center">Kích cỡ: XS , S , M , L</p>
                  <p class="card-title" style="text-align: center">Giá: 249000 VNĐ</p> 
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
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
    </section>
<!--footer-->
</body>
</html>