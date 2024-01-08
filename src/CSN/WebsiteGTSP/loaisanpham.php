<?php
    include_once("header.php");
?>

<!--Noi dung trang-->
<h2 class="text-center">QUẢN LÝ THÔNG TIN LOẠI SẢN PHẨM</h2><br>       
  <a href="them_loaisanpham.php" class = "btn" style="background-color: #33CC66" method="POST">Thêm mới</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Loại Sản Phẩm</th>
        <th>Mô Tả</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once("./connect.php");
        //Viết câu truy vấn SELECT kết 2 bảng sanpham va loaisp
        $sql = "SELECT * FROM loai_sp";
        $result = $conn->query($sql);//Thực thi và hiển thị từng mẩu tin

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
              echo "<tr>
              <td>". $row["ten_loaisp"]."</td>
              <td>". $row["mo_ta_loai"]."</td>";
              echo"<td>";
            ?>
                <a class = "btn" style="background-color: #33CC66" href="sua_loaisanpham.php?ma=<?php echo $row["id"]?>">Sửa</a>
            <?php
            echo "</td>";
            echo "<td>";
            ?>
                <a onclick ="return confirm('Bạn có thực sự muốn xóa hay không?')" class = "btn" style="background-color: #33CC66" href="xoa_loaisanpham.php?ma=<?php echo $row["id"]?>" >Xóa</a>
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
