<?php
include_once("./connect.php");
//Lấy mã từ thẻ a bằng $_GET
$ma="";
if(isset($_GET["ma"]))
{
  $ma =$_GET["ma"] ;

}
// sql to delete a record
$sql = "DELETE FROM san_pham WHERE id='$ma'";

if ($conn->query($sql) === TRUE) {
  echo "Xóa Thành công";
  header("Location:sanpham.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>