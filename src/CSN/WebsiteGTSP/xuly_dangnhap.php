<?php
session_start();
//Kết nối dữ liệu
    include_once("./connect.php");
//Khai báo biến  và khởi tạo
 $email = $mk = "";

//Lấy dữ liệu từ form
if(isset($_POST["email"])&&isset($_POST["password"]))
{
    $email = $_POST["email"];
    $mk = md5($_POST["password"]);
}

//Viết câu truy vấn Insert into
$sql = "SELECT * FROM nguoi_dung WHERE email = '".$email."' AND mat_khau = '".$mk."'";
echo $sql;
$rs = $conn->query($sql);
if($rs->num_rows>0)
{
    $_SESSION["email"]=$email;
    header("Location:quantri.php");
}
else
{
    header("Location:Dangky.php");
}
//Đóng kết nối
$conn->close();
?>