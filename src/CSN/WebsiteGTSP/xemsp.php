<?php
include_once("header.php")
?>

<?php
// Kết nối đến cơ sở dữ liệu MySQL
include_once("connect.php");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

<h2 class="text-center">THÔNG TIN CÁC SẢN PHẨM</h2>         
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá </th>
        <th>Mô Tả</th>
        <th>ID Kích Cỡ</th>
        <th>ID Loại Sản Phẩm</th>
        <th>ID Hình Ảnh</th>
      </tr>
    </thead>
    <tbody>
            <?php
            // Truy vấn dữ liệu từ bảng products
            $sql = "SELECT sp.id, ten_san_pham, gia_sp, mo_ta, loai_san_pham, kich_co_sp, sp_id FROM san_pham sp, hinh_anh h WHERE h.sp_id = sp.id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Hiển thị thông tin về sản phẩm
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>". $row["id"]."</td>
                <td>". $row["ten_san_pham"]."</td>
                <td>". $row["gia_sp"]."</td>
                <td>". $row["mo_ta"]."</td>
                <td>". $row["kich_co_sp"]."</td>
                <td>". $row["loai_san_pham"]."</td>
                <td>". $row["sp_id"]."</td>";
                echo"<td>";
                }
            } else {
                echo "Không có sản phẩm nào.";
            }

// Đóng kết nối
$conn->close();
?>