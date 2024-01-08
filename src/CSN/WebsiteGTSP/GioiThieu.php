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
    <link rel="stylesheet" href="index.css" />
    <title>Giới Thiệu</title>
  </head>
<body>
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
            <a href="index.php"
              ><img
                src="../Image/logo.png"
                alt="Logo"
                wight="40px"
                height="70px"
            /></a>
          </div>
          <div class="col-md-9 py-3">
            <nav class="navbar navbar-expand-sm navbar-dark">
              <div class="container-fluid">
                <a
                  class="navbar-brand d-none"
                  href="index.php"
                  style="color: blueviolet"
                  >Trang chủ</a
                >
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsibleNavbar"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="index.php"
                        style="color: blueviolet"
                        >Trang Chủ</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="GioiThieu.php"
                        style="color: blueviolet"
                        >Giới Thiệu</a
                      >
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        style="color: blueviolet"
                        >Sản Phẩm</a
                      >
                      <ul class="dropdown-menu">
                        <li>
                          <a
                            class="dropdown-item"
                            href="./aosomi.php"
                            style="
                              color: blueviolet;
                              font-size: 14px;
                              font-weight: bold;
                            "
                            >Áo Sơ Mi</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="./vest.php"
                            style="
                              color: blueviolet;
                              font-size: 14px;
                              font-weight: bold;
                            "
                            >Vest</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="./quanau.php"
                            style="
                              color: blueviolet;
                              font-size: 14px;
                              font-weight: bold;
                            "
                            >Quần Âu</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="LienHe.html"
                        style="color: blueviolet"
                        >Liên Hệ</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="DangKy.php"
                        style="color: blueviolet"
                        >Đăng Nhập</a
                      >
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
        <div class="col-md-12 py-3">
          <h5>
            THỜI TRANG CÔNG SỞ LAVENDER LÀ THƯƠNG HIỆU THỜI TRANG GIÀNH CHO PHÁI
            ĐẸP
          </h5>
          <p class="m-0">
            Thời trang công sở Lavender chính thức ra mắt ngày 06/8/2014 với 1
            cửa hàng nhỏ nhắn mặt ngõ. Qua thời gian, được sự tin tưởng và yêu
            quý của khách hàng, Lavender ngày càng phát triển hơn và có được như
            ngày hôm nay.
          </p>
          <p class="m-0">
            Lavender hãnh diện mang lại những trang phục đẹp từ kiểu dáng đến
            chất liệu cho hơn 100.000+ phụ nữ Việt Nam trên khắp các tỉnh thành
            trong suốt hơn 5 năm qua. Chúng tôi luôn tâm niệm mang đến những
            thiết kế nhẹ nhàng trẻ trung và hiện đại cùng chị em sải bước tự tin
            đến công sở. Các sản phẩm của hãng có form dáng chuẩn, đường may sắc
            sảo và được sản xuất từ chất liệu vải tốt..
          </p>
          <p>
            Lavender hãnh diện mang lại những trang phục đẹp từ kiểu dáng đến
            chất liệu cho hơn 100.000+ phụ nữ Việt Nam trên khắp các tỉnh thành
            trong suốt hơn 5 năm qua. Chúng tôi luôn tâm niệm mang đến những
            thiết kế nhẹ nhàng trẻ trung và hiện đại cùng chị em sải bước tự tin
            đến công sở. Các sản phẩm của hãng có form dáng chuẩn, đường may sắc
            sảo và được sản xuất từ chất liệu vải tốt..
          </p>
          <p>&nbsp;</p>
          <h5>TẦM NHÌN</h5>
          <p class="m-0">
            Đến 2025, Lavender mong muốn và quyết tâm trở thành thương hiệu thời
            trang online hàng đầu trong mảng thời trang công sở. Bên cạnh đó,
            Lavender sẽ mở rộng mạng lưới cửa hàng, showroom bán hàng truyền
            thống trên khắp cả nước để khách hàng có thể trải nghiệm trực tiếp.
          </p>
          <p>
            Chúng tôi luôn nỗ lực mỗi ngày để khách hàng có trải nghiệm mua sắm
            ngày càng tốt, khiến Lavender trở thành thương hiệu được biết đến
            trong tâm trí của khách hàng
          </p>
          <p>&nbsp;</p>
          <h5>SỨ MỆNH</h5>
          <p class="m-0">
            Lavender với giá trị cốt lõi về sản phẩm, luôn tâm niệm trở thành
            doanh nghiệp bền vững, đồng hành cùng các giá trị nội địa cũng như
            toàn cầu
          </p>
          <p>
            Tạo điều kiện cho khách hàng sở hữu những sản phẩm cao cấp với giá
            tốt, xây dựng giá trị cho nhân viên và các hoàn cảnh cần giúp đỡ là
            sứ mệnh của chúng tôi
          </p>
          <p>&nbsp;</p>
          <h5>CÔNG TY TNHH THỜI TRANG LAVENDER</h5>
          <p class="m-0">MST: 0110162444</p>
          <p>Địa chỉ: Số 1, ngõ 40/12 Ngọc Trục, Đại Mỗ, Nam Từ Liêm, Hà Nội</p>
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
    <!--footer-->
</body>
</html>
