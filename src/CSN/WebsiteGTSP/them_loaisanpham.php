
<?php
    include_once("header.php");
?>

<!--Noi dung trang-->
<div class="container">
<h2 class="text-center">Thêm Mới Loại Sản Phẩm</h2>
<form action="xuly_themloaisp.php" method = "post">
  <div class="mb-3 mt-3">
    <label for="tenlsp" class="form-label">Tên loại sản phẩm:</label>
    <input type="text" class="form-control" id="tenlsp" placeholder="Nhập tên loại sản phẩm" name="tenlsp">
  </div>
  <div class="mb-3 mt-3">
    <label for="mota" class="form-label">Mô tả loại sản phẩm:</label>
    <input type="text" class="form-control" id="mota" placeholder="Nhập mô tả loại sản phẩm" name="mota">
  </div>
    <button type="submit" class="btn" style="background-color: #33CC66">Thêm</button>
</form>
</div>
<?php
        //Viết câu truy vấn SELECT kết 2 bảng nguoidung va quyen
        $sql = "SELECT * FROM san_pham";
        $result = $conn->query($sql);//Thực thi và hiển thị từng mẩu tin

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row ['id']."'>";
            "</option>";
        }
        } else {
        echo "0 results";
        }
    ?>
