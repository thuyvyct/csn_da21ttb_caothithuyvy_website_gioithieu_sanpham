<?php
include_once("header.php");
$ma = "";
if(isset($_GET["ma"]))
{
  $ma = $_GET["ma"];
}

$sql = "SELECT * FROM nguoi_dung WHERE id ='$ma'";
$result = $conn->query($sql);
$ma_val = $ten_val = $email_val = $mk_val = $quyen_val = "";
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
    $ma_val = $row["id"];
    $ten_val = $row["ten_nguoi_dung"];
    $email_val = $row["email"];
    $mk_val = $row["mat_khau"];
    $quyen_val = $row["quyen"];
   }
}
?>

<div class="container mt-3">
  <h2>Quản lý người dùng</h2>
  <form action="./sua_nguoidung.php" method = "post">
  <div class="mb-3 mt-3">
      <label for="id">Mã người dùng:</label>
      <input value = "<?php echo $ma_val;?>" readonly type="text" class="form-control" id="id" placeholder="" name="id">
    </div>  
  <div class="mb-3 mt-3">
      <label for="ten">Tên đăng nhập:</label>
      <input  value = "<?php echo $ten_val;?>" type="text" class="form-control" id="ten" placeholder="Nhập tên đăng nhập" name="ten">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input  value = "<?php echo $email_val;?>" type="text" class="form-control" id="email" placeholder="Nhập email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="mk">Mật khẩu:</label>
      <input  value = "<?php echo $mk_val;?>" type="text" class="form-control" id="mk" name="mk">
    </div>
    <div class="mb-3 mt-3">
      <label for="quyen">Quyền:</label>
      <select type="text" class="form-control" id="quyen"  name="quyen">
        <?php
        $sql = "SELECT * FROM quyen";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if($quyen_val==$row["id"])
            {
              echo "<option selected value='" . $row["id"]. "'>" . $row["vaitro"]. " </option>";
            }
            else
            {
              echo "<option value='" . $row["id"]. "'>" . $row["vaitro"]. " </option>";
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
    $ma = $ten = $email = $mk = $quyen = "";
    if(isset($_POST["ten"])&&isset($_POST["email"])&&isset($_POST["mk"])&&isset($_POST["quyen"]))
    {
      $ma = $_POST["id"];
      $ten = $_POST["ten"]; 
      $email = $_POST["email"];
      $mk = $_POST["mk"];
      $quyen = $_POST["quyen"];
    }

    //Viết câu truy vấn cập nhật
    $sql = "UPDATE nguoi_dung SET ten_nguoi_dung ='$ten', email = '$email', mat_khau = '$mk', quyen = '$quyen' WHERE id = '$ma'";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
      header("Location:nguoidung.php");;
    } else {
      echo "Error updating record: " . $conn->error;
    }
 }
?>