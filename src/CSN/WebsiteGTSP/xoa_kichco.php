<?php
include_once("./connect.php");
//Lấy mã từ thẻ a bằng $_GET
$ma="";
if(isset($_GET["ma"]))
{
  $ma = $_GET["ma"] ;

}
// sql to delete a record
$sql = "DELETE FROM kich_co WHERE id = '$ma'";

if ($conn->query($sql) === TRUE) {
  echo "Xóa Thành công";
  header("Location:kichco.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>