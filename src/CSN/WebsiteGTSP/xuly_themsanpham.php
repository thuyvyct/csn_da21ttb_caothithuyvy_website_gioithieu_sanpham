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
$ten = $mota = $gia = $kc = $lsp = "";

//Lấy dữ liệu từ form
if(isset($_POST["tensp"])&&isset($_POST["mota"])&&isset($_POST["gia_sp"]))
{
    $ten = $_POST["tensp"];
    $mota = $_POST["mota"];
    $gia = $_POST["gia_sp"];
    $kc = $_POST["kc"];
    $lsp = $_POST["lsp"];
}

//Viết câu truy vấn Insert into
$sql = "INSERT INTO san_pham (ten_san_pham, mo_ta, gia_sp, kich_co_sp, Loai_san_pham) VALUES ('$ten', '$mota', '$gia', '$kc', '$lsp')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Thêm thành công";
    header("Location:sanpham.php");
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
  //Đóng kết nối
$conn->close();
?>