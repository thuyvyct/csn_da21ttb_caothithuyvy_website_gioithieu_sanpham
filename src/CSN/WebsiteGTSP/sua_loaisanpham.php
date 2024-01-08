<?php
include_once("header.php");
$ma = "";
if(isset($_GET["ma"]))
{
  $ma = $_GET["ma"];
}

$sql = "SELECT * FROM loai_sp WHERE id ='$ma'";
$result = $conn->query($sql);
$ma_val = $tenlsp_val = $mota_val = "";
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
    $ma_val = $row["id"];
    $tenlsp_val = $row["ten_loaisp"];
    $mota_val = $row["mo_ta_loai"];
   }
}
?>

<div class="container mt-3">
  <h2>Quản lý loại sản phẩm</h2>
  <form action="./sua_loaisanpham.php" method = "post">
  <div class="mb-3 mt-3">
      <label for="id">Mã loại sản phẩm:</label>
      <input value = "<?php echo $ma_val;?>" readonly type="text" class="form-control" id="id" placeholder="" name="id">
    </div>  
  <div class="mb-3 mt-3">
      <label for="tenlsp">Tên loại sản phẩm:</label>
      <input  value = "<?php echo $tenlsp_val;?>" type="text" class="form-control" id="tenlsp" placeholder="Nhập tên loại sản phẩm" name="tenlsp">
    </div>
    <div class="mb-3 mt-3">
      <label for="mota">Mô tả:</label>
      <input  value = "<?php echo $mota_val;?>" type="text" class="form-control" id="mota" placeholder="Nhập mô tả" name="mota">
    </div>
    <button name = "sbCapNhat" type="submit" class="btn" style="background-color: #33CC66;">Cập nhật</button>
  </form>
</div>
<br>
<?php
 if(isset($_POST["sbCapNhat"]))
 {
  //Lấy biến từ form
    $ma = $tenlsp = $mota = "";
    if(isset($_POST["tenlsp"])&&isset($_POST["mota"]))
    {
      $ma = $_POST["id"];
      $tenlsp = $_POST["tenlsp"]; 
      $mota = $_POST["mota"];
    }

    //Viết câu truy vấn cập nhật
    $sql = "UPDATE loai_sp SET ten_loaisp ='$tenlsp', mo_ta_loai = '$mota' WHERE id='$ma'";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
      header("Location:loaisanpham.php");;
    } else {
      echo "Error updating record: " . $conn->error;
    }
 }
?>