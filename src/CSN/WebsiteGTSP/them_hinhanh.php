<?php
    include_once("header.php");
?>

<div class="container">
  <h2 class="text-center">Thêm Hình Ảnh Sản Phẩm</h2>
  <form action="xuly_themhinhanh.php" method = "post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="sanpham">Chọn sản phẩm:</label>
      <select type="text" class="form-control" id="sanpham" placeholder="Nhập id sản phẩm" name="sanpham">
        <?php
        $sql = "SELECT * FROM san_pham";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["id"]. "'>" . $row["ten_san_pham"]. " </option>";
          }
        } else {
          echo "0 results";
        }
       
        ?>

      </select>
    </div>
    <div class="mb-3 mt-3">
      <label for="tenanh">Chọn ảnh:</label>
      <input type="file" value="Upload Image" name="fileToUpload" required>
    </div>
    <button type="submit" class="btn" style="background-color: #33CC66" name = "sbThem">Thêm</button>
  </form>
</div>
