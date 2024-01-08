<?php
    include_once("header.php");
?>

<!--Noi dung trang-->
<h2 >QUẢN LÝ THÔNG TIN SẢN PHẨM</h2><br>     
  <a href="./them_sanpham.php" class = "btn" style="background-color: #33CC66">Thêm mới</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Mô Tả</th>
        <th>Kích Cỡ</th>
        <th>Loại Sản Phẩm</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once("connect.php");
        //Viết câu truy vấn SELECT
        $sql = "SELECT sp.id, ten_san_pham, gia_sp, mo_ta, kc.ten_kich_co, loai.ten_loaisp 
                FROM san_pham sp, kich_co kc, loai_sp loai 
                WHERE sp.kich_co_sp = kc.id AND sp.loai_san_pham = loai.id";
        $result = $conn->query($sql);//Thực thi và hiển thị từng mẩu tin

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>". $row["id"]."</td>
                  <td>". $row["ten_san_pham"]."</td>
                  <td>". $row["gia_sp"]."</td>
                  <td>". $row["mo_ta"]."</td>
                  <td>". $row["ten_kich_co"]."</td>
                  <td>". $row["ten_loaisp"]."</td>";
          echo"<td>";
            ?>
                <a class = "btn" style="background-color: #33CC66" href="sua_sanpham.php?ma=<?php echo $row["id"]?>">Sửa</a>
            <?php
            echo "</td>";
            echo "<td>";
            ?>
                <a onclick ="return confirm('Bạn có thực sự muốn xóa hay không?')" class = "btn" style="background-color: #33CC66" href="xoa_sanpham.php?ma=<?php echo $row["id"]?>"> Xóa</a>
            <?php
            echo "</td>";
            echo "</tr>";
        }
        } else {
        echo "0 results";
        }
      ?>

    </tbody>
  </table>
