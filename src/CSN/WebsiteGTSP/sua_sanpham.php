<?php
include_once("header.php");
$ma = "";
if(isset($_GET["ma"]))
{
  $ma = $_GET["ma"];
}

$sql = "SELECT * FROM san_pham WHERE id ='$ma'";
$result = $conn->query($sql);
$ma_val = $tensp_val = $gia_val = $mota_val = $kc_val =$lsp_val="";
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
    $ma_val = $row["id"];
    $tensp_val = $row["ten_san_pham"];
    $gia_val =$row["gia_sp"];
    $mota_val = $row["mo_ta"];
    $kc_val = $row["kich_co_sp"];
    $lsp_val = $row["loai_san_pham"];
   }
}
?>

<div class="container mt-3">
  <h2>Quản lý sản phẩm</h2>
  <form action="./sua_sanpham.php" method = "post">
  <div class="mb-3 mt-3">
      <label for="id">Mã sản phẩm:</label>
      <input value = "<?php echo $ma_val;?>" readonly type="text" class="form-control" id="id" placeholder="" name="id">
    </div>  
  <div class="mb-3 mt-3">
      <label for="tensp">Tên sản phẩm:</label>
      <input  value = "<?php echo $tensp_val;?>" type="text" class="form-control" id="tensp" placeholder="Nhập tên sản phẩm" name="tensp">
    </div>
    <div class="mb-3 mt-3">
      <label for="gia_sp">Giá:</label>
      <input  value = "<?php echo $gia_val;?>" type="number" class="form-control" id="gia_sp" placeholder="Nhập giá bán" name="gia_sp">
    </div>
    <div class="mb-3 mt-3">
      <label for="mota">Mô tả:</label>
      <input  value = "<?php echo $mota_val;?>" type="text" class="form-control" id="mota" placeholder="Nhập mô tả" name="mota">
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
    </div>
    <div class="mb-3 mt-3">
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

    <button name = "sbCapNhat" type="submit" class="btn" style="background-color: #33CC66;">Cập nhật</button>
  </form>
</div>
<br>
<?php
 if(isset($_POST["sbCapNhat"]))
 {
  //Lấy biến từ form
    $ma = $tensp = $gia = $mota = $kc = $lsp = "";
    if(isset($_POST["tensp"])&&isset($_POST["gia_sp"])&&isset($_POST["mota"])&&isset($_POST["kc"])&&isset($_POST["lsp"]))
    {
      $ma = $_POST["id"];
      $tensp = $_POST["tensp"];
      $gia = $_POST["gia_sp"];   
      $mota = $_POST["mota"];
      $kc = $_POST["kc"];
      $lsp = $_POST["lsp"];   
    }

    //Viết câu truy vấn cập nhật
    $sql = "UPDATE san_pham SET ten_san_pham ='$tensp', gia_sp = '$gia', mo_ta = '$mota', loai_san_pham ='$lsp', kich_co_sp = '$kc' WHERE id='$ma'";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
      header("Location:sanpham.php");;
    } else {
      echo "Error updating record: " . $conn->error;
    }
 }
?>