<?php
    include_once("header.php");
?>

<!--Noi dung trang-->
<h2 class="text-center">Thêm Mới Người Dùng</h2>
<form action="./xuly_themnguoidung.php" method = "post">
  <div class="mb-3 mt-3">
    <label for="tendn" class="form-label">Tên đăng nhập:</label>
    <input type="text" class="form-control" id="tendn" placeholder="Nhập tên đăng nhập" name="tendn">
  </div>
  <div class="mb-3">
    <label for="matkhau" class="form-label">Mật khẩu:</label>
    <input type="password" class="form-control" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="quyen" class="form-label" >Chọn quyền: </label>
    <select class="form-select" name = "quyen">
    <?php
        //Viết câu truy vấn SELECT kết 2 bảng nguoidung va quyen
        $sql = "SELECT * FROM quyen";
        $result = $conn->query($sql);//Thực thi và hiển thị từng mẩu tin

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row ['id']."'>";
            echo $row ["vaitro"];
            "</option>";
        }
        } else {
        echo "0 results";
        }
    ?>
    </select>
  </div>
  <button type="submit" class="btn" style="background-color: #33CC66">Thêm</button>
</form>