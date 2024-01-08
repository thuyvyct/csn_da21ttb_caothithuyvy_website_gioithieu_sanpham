<?php
    include_once("header.php");
?>
<div class="container">
  <div class = "row">
    <div class="col-md-2">&nbsp;</div>
      <div class="col-md-8">
        <h2 class="text-center">QUẢN LÝ HÌNH ẢNH SẢN PHẨM</h2><br>
        <a href = "them_hinhanh.php" class="btn" style="background-color: #33CC66">Thêm mới</a><br>
        <?php
          include_once("./connect.php");

          $sql = "SELECT h.id, ten_san_pham, ten_anh FROM hinh_anh h, san_pham sp WHERE sp.id = h.sp_id";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            echo "<br><table class = 'table table-hover'>";
            echo "<tr>
                    <th style = 'width:15%'>Hình ảnh</th>
                    <th style = 'width:55%'>Tên sản phẩm</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>";
            while($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td><img class = 'img-fluid' src = '../Image/". $row["ten_anh"]."'></td>
                      <td>".$row["ten_san_pham"]."</td>";
              
              echo"<td>";
              ?>
                
                <a class = "btn" style="background-color: #33CC66" href = "./sua_hinhanh.php?&ma=<?php echo $row["id"];?>">Sửa</a>
              <?php
                echo"</td>";
                echo"<td>";
              ?>
                <a onclick = "return confirm('Bạn có thật sự muốn xóa không?')" class = "btn" style="background-color: #33CC66" href = "./xoa_hinhanh.php?&ma=<?php echo $row["id"];?>">Xóa</a>
              <?php
                echo"</td>";
                echo "</tr>";
            }
            echo "</table>";
          } else {
            echo "0 results";
          }
        ?>
      </div>
    <div class="col-md-2">&nbsp;</div>
  </div>
</div>
