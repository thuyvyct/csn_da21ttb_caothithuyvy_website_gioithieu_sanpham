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
$ten = $mota = "";

//Lấy dữ liệu từ form
if(isset($_POST["tenkc"])&&isset($_POST["mota"]))
{
    $ten = $_POST["tenkc"];
    $mota = $_POST["mota"];
}

//Viết câu truy vấn Insert into
$sql = "INSERT INTO kich_co (ten_kich_co, mo_ta_kc) VALUES ('$ten', '$mota')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Thêm thành công";
    header("Location:kichco.php");
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
  //Đóng kết nối
$conn->close();
?>