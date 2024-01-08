<?php
include_once("header.php");
$ma = "";
if(isset($_GET["ma"]))
{
  $ma = $_GET["ma"];
}

$sql = "SELECT * FROM kich_co WHERE id ='$ma'";
$result = $conn->query($sql);
$ma_val = $tenkc_val = $mota = "";
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
    $ma_val = $row["id"];
    $tenkc_val = $row["ten_kich_co"];
    $mota_val = $row["mo_ta_kc"];
   }
}
?>

<div class="container mt-3">
  <h2>Quản lý kích cỡ</h2>
  <form action="./sua_kichco.php" method = "post">
  <div class="mb-3 mt-3">
      <label for="id">Mã kích cỡ:</label>
      <input value = "<?php echo $ma_val;?>" readonly type="text" class="form-control" id="id" placeholder="" name="id">
    </div>  
  <div class="mb-3 mt-3">
      <label for="tenkc">Tên kích cỡ:</label>
      <input  value = "<?php echo $tenkc_val;?>" type="text" class="form-control" id="tenkc" placeholder="Nhập tên sản phẩm" name="tenkc">
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
    $ma = $tenkc = $mota = "";
    if(isset($_POST["tenkc"])&&isset($_POST["mota"]))
    {
      $ma = $_POST["id"];
      $tenkc = $_POST["tenkc"];  
      $mota = $_POST["mota"];  
    }

    //Viết câu truy vấn cập nhật
    $sql = "UPDATE kich_co SET ten_kich_co ='$tenkc', mo_ta_kc = '$mota' WHERE id='$ma'";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
      header("Location:kichco.php");;
    } else {
      echo "Error updating record: " . $conn->error;
    }
 }
?>