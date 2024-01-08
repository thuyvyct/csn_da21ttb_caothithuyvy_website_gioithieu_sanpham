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
//Lấy giá trị từ form
$ten = $idsp = "";

if(isset($_POST["sbThem"])) 
{
  $ten = $_FILES["fileToUpload"]["name"];
  $idsp = $_POST["sanpham"];
}

//Upload file
  $target_dir = "../Image";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Kiểm tra file ảnh là ảnh thật hay ảnh giả
        if(isset($_POST["sbThem"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }
        echo $target_file."--".$_FILES["fileToUpload"]["tmp_name"];
        // Kiểm tra xem tập tin đã tồn tại chưa
        if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
        }

        // Kiểm tra kích thước tập tin
        if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;  
        }

        // Cho phép một số định dạng tệp nhất định
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }

        // Check if $upload Ok is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }

//Viết câu truy vấn
$sql = "INSERT INTO hinh_anh (ten_anh, sp_id)
VALUES ('$ten', $idsp)";

//Thực thi câu truy vấn - Kiểm tra và hiển thị kết quả
if ($conn->query($sql) === TRUE) {
  header("Location:hinhanh.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//đóng kết nối
$conn->close();
?>