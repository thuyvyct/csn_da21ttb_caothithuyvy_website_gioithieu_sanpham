<?php
session_start();
if(!isset($_SESSION["email"]))
{
  header("Location:DangKy.php");
}
//Kết nối cơ sở dữ liệu
     include_once("connect.php");
?>
<?php
//Khai báo biến  và khởi tạo
$ten = $mk = $email = $quyen = "";

//Lấy dữ liệu từ form
if(isset($_POST["tendn"])&&isset($_POST["matkhau"]))
{
    $ten = $_POST["tendn"];
    $mk = md5($_POST["matkhau"]);
    $email = $_POST["email"];
    $quyen = $_POST["quyen"];
}

//Viết câu truy vấn Insert into
$sql = "INSERT INTO nguoi_dung (ten_nguoi_dung, mat_khau,email, quyen) VALUES ('$ten', '$mk','$email', '$quyen')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Thêm thành công";
    header("Location:nguoidung.php");
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
  //Đóng kết nối
$conn->close();
?>