<?php
    include_once("header.php");
?>

<!--Noi dung trang-->
<div class="container">
<h2 class="text-center">Thêm Mới Kích Cỡ</h2>
<form action="xuly_themkichco.php" method="post">
  <div class="mb-3 mt-3">
    <label for="tenkc" class="form-label">Tên kích cỡ:</label>
    <input type="text" class="form-control" id="tenkc" placeholder="Nhập tên kích cỡ" name="tenkc">
  </div>
  <div class="mb-3">
    <label for="mota" class="form-label">Mô tả:</label>
    <input type="text" class="form-control" id="mota" placeholder="Nhập mô tả" name="mota">
  </div>
  <button type="submit" class="btn" style="background-color: #33CC66">Thêm</button>
</form>
</div>
<?php
        //Viết câu truy vấn SELECT kết 2 bảng 
        $sql = "SELECT * FROM kich_co";
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
