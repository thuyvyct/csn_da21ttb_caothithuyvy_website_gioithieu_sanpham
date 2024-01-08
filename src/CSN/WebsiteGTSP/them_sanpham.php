<?php
    include_once("header.php");
?>

<!--Noi dung trang-->
<h2 class="text-center">Thêm Mới Sản Phẩm</h2>
<form action="xuly_themsanpham.php" method = "post">
  <div class="mb-3 mt-3">
    <label for="tensp" class="form-label">Tên sản phẩm:</label>
    <input type="text" class="form-control" id="tensp" placeholder="Nhập tên sản phẩm" name="tensp">
  </div>
  <div class="mb-3">
    <label for="mota" class="form-label">Mô tả:</label>
    <input type="text" class="form-control" id="mota" placeholder="Nhập mô tả" name="mota">
  </div>
  <div class="mb-3 mt-3">
    <label for="gia_sp" class="form-label">Giá:</label>
    <input type="number" class="form-control" id="gia_sp" placeholder="Nhập giá bán" name="gia_sp">
  </div>
  <div class="mb-3 mt-3">
  <label for="lsp">Loại sản phẩm:</label>
      <select type="text" class="form-control" id="lsp"  name="lsp">
        <?php
        $sql = "SELECT * FROM loai_sp";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if($lsp_val==$row["id"])
            {
              echo "<option selected value='" . $row["id"]. "'>" . $row["ten_loaisp"]. " </option>";
            }
            else
            {
              echo "<option value='" . $row["id"]. "'>" . $row["ten_loaisp"]. " </option>";
            }
           
          }
        } else {
          echo "0 results";
        }
        ?>
      </select>
      <label for="kc">Kích cỡ:</label>
      <select type="text" class="form-control" id="kc"  name="kc">
        <?php
        $sql = "SELECT * FROM kich_co";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if($kc_val==$row["id"])
            {
              echo "<option selected value='" . $row["id"]. "'>" . $row["ten_kich_co"]. " </option>";
            }
            else
            {
              echo "<option value='" . $row["id"]. "'>" . $row["ten_kich_co"]. " </option>";
            }
          }
        } else {
          echo "0 results";
        }
        ?>
      </select>
  </div>
  <button type="submit" class="btn" style="background-color: #33CC66">Thêm</button>
</form>
