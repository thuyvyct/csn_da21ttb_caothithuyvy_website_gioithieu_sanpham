<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="index.css">
    <title>Trang Chủ</title>
  </head>
  <body>
    <?php
    include_once("./connect.php");
    ?>
  <section class="top" style="  background-color: #ba55d3;">
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
            <a href="index.php">
              <img src="../Image/logo.png" alt="Logo" wight="40px" height="70px"/></a>
          </div>
          <div class="col-md-9 py-3">
            <nav class="navbar navbar-expand-sm navbar-dark">
              <div class="container-fluid">
                <a class="navbar-brand d-none text-white" href="index.php" style="color: blueviolet">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item text-white">
                      <a class="nav-link" href="./index.php" style="color: blueviolet">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./GioiThieu.php" style="color: blueviolet">Giới Thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: blueviolet" >Sản Phẩm</a>
                      <ul class="dropdown-menu">
                        <from>
                        <li>
                          <a class="dropdown-item" href="./aosomi.php" style="font-size: 14px; color: blueviolet; font-weight: bold;"> Áo Sơ Mi</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="./vest.php" style=" font-size: 14px; color: blueviolet; font-weight: bold;">Vest</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="./quanau.php" style=" font-size: 14px; color: blueviolet; font-weight: bold;">Quần Âu</a>
                        </li>
                        </from>
                      </ul>
                    </li>
                    <li class="nav-item text-white">
                      <a
                        class="nav-link" href="LienHe.html" style="color: blueviolet">Liên Hệ</a>
                    </li>
                    <li class="nav-item text-white">
                      <a
                        class="nav-link" href="./DangKy.php" style="color: blueviolet">Đăng Nhập</a>
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
    <section class="menu">
      <div class="container">
        <div class="row"></div>
      </div>
    </section>
    <!--end-menu-->
    <section class="content">
      <div class="container mt-2">
        <div class="slide">
          <!-- Carousel -->
          <div id="banner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="../Image/B1.jpg"
                  alt="Banner1"
                  class="d-block"
                  style="display: block;  margin-left: auto;  margin-right: auto;  width: 90%;"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../Image/B2.jpg"
                  alt="Banner2"
                  class="d-block"
                  style="display: block;  margin-left: auto;  margin-right: auto;  width: 90%;"
                />
              </div>
            </div>
          </div>
        </div>
        <div
          id="row"
          class="row mt-3"
          style="background-color: #BA55D3; border-radius: 5px"
        >
          <div class="col-md-3">
            <i id="bag" class="fa-solid fa-bag-shopping py-3"></i>
            <b id="sanpham py-3">VEST</b>
          </div>
          <div class="col-md-8"></div>
          <div class="col-md-1 py-2">
            <a id="them" href="./vest.php" class="btn text-black py-1">Thêm</a>
          </div>
        </div>
        <div class="container mt-3">
          <div class="row">
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/V2730.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                    Áo vest nữ thời trang Lavender dáng dài 4 cúc V2730
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Áo vest dáng dài 4 cúc V2730 với 3 tông màu đen, xanh và trắng xinh xắn, kiểu dáng tay dài, cổ ve lịch sự, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 450000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/V2707.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo vest cộc tay V2707
                  </h5><br><br>
                  <p class="card-title" style="text-align: center">Mô tả: Áo vest cộc tay V2707 với 2 tông màu nâu và đen basic, kiểu dáng tay ngắn năng động, cổ ve lịch sự, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 330000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/V2727.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo blazer nữ Thời trang Lavender cổ ve tay dài 2 cúc vạt túi cong V2727
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Áo vest cộc tay V2707 với 2 tông màu nâu và đen basic, kiểu dáng tay ngắn năng động, cổ ve lịch sự, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 439000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/V2930.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Áo vest tím tay dài cổ ve V2930
                  </h5><br>
                  <p class="card-title" style="text-align: center">Mô tả: Áo vest tím tay dài cổ ve V2930 với tông màu tím xinh xắn, kiểu dáng tay dài, cổ ve lịch sự, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 490000 VNĐ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          id="row"
          class="row mt-3"
          style="background-color: #BA55D3; border-radius: 5px"
        >
          <div class="col-md-3">
            <i id="bag" class="fa-solid fa-bag-shopping py-3"></i>
            <b id="sanpham py-3">ÁO SƠ MI</b>
          </div>
          <div class="col-md-8"></div>
          <div class="col-md-1 py-2">
            <a id="them" href="./aosomi.php" class="btn text-black py-1">Thêm</a>
          </div>
        </div>
        <div class="container">
          <div class="row mt-2">
            <div class="col-md-3 text-white">
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
                  <p class="card-title" style="text-align: center">Giá: 299000 VNĐ</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          id="row"
          class="row mt-3"
          style="background-color: #BA55D3; border-radius: 5px"
        >
          <div class="col-md-3">
            <i id="bag" class="fa-solid fa-bag-shopping py-3"></i>
            <b id="sanpham py-3">QUẦN ÂU</b>
          </div>
          <div class="col-md-8"></div>
          <div class="col-md-1 py-2">
            <a id="them" href="./quanau.php" class="btn text-black py-1">Thêm</a>
          </div>
        </div>
        <div class="container">
          <div class="row mt-2">
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/Q1347.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Quần âu ống xuông Q1347
                  </h5><br><br>
                  <p class="card-title" style="text-align: center">Mô tả: Quần âu ống xuông Q1347 với 4 tông màu cơ bản cho nàng thỏa sức lựa chọn, kiểu dáng ống xuông hack dáng, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 259000 VNĐ</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/Q2277.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Quần xuông khóa hông Q2277
                  </h5>
                  <p class="card-title" style="text-align: center">Mô tả: Quần xuông khóa hông Q2277 với 3 tông màu cơ bản cho nàng thỏa sức lựa chọn, kiểu dáng ống xuông hack dáng, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 269000 VNĐ</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/Q2269.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">
                  Quần loe xẻ trước Q2269
                  </h5><br><br>
                  <p class="card-title" style="text-align: center">Mô tả: Quần loe xẻ trước Q2269 với tông màu đen cơ bản, kiểu dáng ống loe hack dáng chân dài, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 250000 VNĐ</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-white">
              <div class="card" style="width: 300px">
                <img
                  class="card-img-top"
                  src="../Image/Q2456.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h5 class="card-title" >
                  Quần âu ống đứng cạp xếp ly Q2456
                  </h5><br>
                  <p class="card-title" style="text-align: center">Mô tả: Quần âu ống đứng cạp xếp ly Q2456 với tông màu đen và nâu sang trọng, kiểu dáng ống đứng lịch sự, dễ mặc dễ phối</p>
                  <p class="card-title" style="text-align: center">Giá: 279000 VNĐ</p> 
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
              <a href="tel:0943 316 669 / 0356875809"
                >0943 316 669 / 0356875809</a
              >
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
