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
                      <?php
                      $sql1 = "SELECT * FROM loai_sp";
                      $rs = $conn->query($sql1);
                      if ($rs->num_rows > 0) {
                        while ($r = $rs->fetch_assoc()) {
                          echo ' <a href="htsanpham.php?ma='.$r["id"].'"  class="dropdown-item" href="sanpham.php?ma='.$r["id"].'" style="font-size: 14px; color: blueviolet; font-weight: bold;">'.$r["ten_loaisp"].'</a>';   
                        }           
                      } else {
                      echo "0 results";
                      }
                      ?>
                      </ul>
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
<div class="container" style="max-width:1200px;margin-top:60px;">
  <div class="row" id="sanpham">
    <?php
      $sql = "SELECT * FROM loai_sp";
      $rs = $conn->query($sql);
      if ($rs->num_rows > 0) {               
        while ($r = $rs->fetch_assoc()) {
          echo '<div class="w3-panel w3-leftbar w3-border-green w3-theme-l2 w3-xxlarge w3-serif">';
            echo '<h2 style = "text-transform:uppercase;">';
              echo $r["ten_loaisp"];
            echo '</h2>';
          echo '</div>';
          $sql = "SELECT hinh_anh.ten_anh, san_pham.id, san_pham.mo_ta, san_pham.ten_san_pham, san_pham.gia_sp
              FROM hinh_anh
              JOIN san_pham ON hinh_anh.sp_id = san_pham.id WHERE loai_san_pham ='".$r["id"]."'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            echo '<div class="row">';            
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-3">';
              echo '<div class="card" style="width:100%";>';
                  echo '<img src="../Image/' . $row['ten_anh'] . '" alt="' . $row['ten_san_pham'].'" style="width:100%">';         
                  echo '<div class="card-body">';
                  echo '<h5 class = "" style="text-align: center">' . $row['ten_san_pham'] . '</h5>';
                  echo '<p class ="card-title" style="text-align: center"> Mô tả: ' . $row['mo_ta'] . '</p>';
                  echo '<p style="text-align: center"> Kích cỡ: XS , S , M , L </p>';
                  echo '<p class ="card-title" style="text-align: center"> Giá: '. $row['gia_sp'] . ' VNĐ</p>';
                  echo '</div>';
              echo '</div>';
              echo '</div>';
          }           
          echo '</div>';
          echo '</div>';
          } else {
            echo "0 results";
          }
        }                 
      } else {
        echo "0 results";
      }    
    ?>
  </div>
</div>