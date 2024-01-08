<?php
include_once("header.php");
$ma="";
if(isset( $_GET["ma"]))
  $ma = $_GET["ma"];

$sql = "SELECT * FROM hinh_anh WHERE id ='$ma'";
$result = $conn->query($sql);
$ma_val = $ten_val = $idsp_val ="";
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
    $ma_val = $row["id"];
    $ten_val = $row["ten_anh"];
    $idsp_val =$row["sp_id"];
   }
}
?>

<?php
 if(isset($_POST["sbCapNhat"]))
 {
    //Lấy biến từ form
    $ten = $idsp = $ma= "";
    if(isset($_FILES["fileToUpload"]["name"]))
    {
        $ma = $_POST["id"];
        $ten = $_FILES["fileToUpload"]["name"];
        $idsp = $_POST["sp"];
    }
    
    //Upload file
    $target_dir = "Image/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
    // Kiểm tra file ảnh là ảnh thật hay ảnh giả
          
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } 
    else {
      echo "File is not an image.";
      $uploadOk = 0;
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
    } 
    else 
    {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } 
      else 
      {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    //Viết câu truy vấn cập nhật
    if(isset($_FILES["fileToUpload"]["tmp_name"])&&!empty($_FILES["fileToUpload"]["tmp_name"]))
    {
      $sql = "UPDATE hinh_anh SET sp_id = '$idsp', ten_anh ='$ten' WHERE id='$ma'";
    }
    else{
      $sql = "UPDATE hinh_anh SET sp_id = '$idsp' WHERE id='$ma'";

    }
    echo $sql;
    if ($conn->query($sql) === TRUE) {
      header("Location:hinhanh.php");;
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
?>


<div class="containe">
  <h2>Cập nhật hình ảnh</h2>
  <form action="sua_hinhanh.php" method = "post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="id">Mã hình ảnh:</label>
      <input value = "<?php echo $ma_val;?>" readonly type="text" class="form-control" id="id" placeholder="" name="id">
    </div>  
    
    <div class="mb-3 mt-3">
      <label for="sp">Tên sản phẩm:</label>
      <select type="text" class="form-control" id="sp" name="sp">
                <?php
                $sql = "SELECT * FROM san_pham";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($idsp_val == $row["id"]) {
                            echo "<option selected value='" . $row["id"] . "'>" . $row["ten_san_pham"] . " </option>";
                        } else {
                            echo "<option value='" . $row["id"] . "'>" . $row["ten_san_pham"] . " </option>";
                        }
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </select>
    </div>
    <div class="mb-3 mt-3">
      <label for="tenanh">Chọn ảnh mới:</label>
      <input type="file" value="Upload Image" name="fileToUpload">
    </div>
    <div class="mb-3 mt-3">
      <label for="id">Ảnh hiện tại:</label>
      <img src = "../Image/<?php echo $ten_val;?>" width = "10%" alt = "">
    </div> 
    <button name = "sbCapNhat" type="submit" class="btn" style="background-color: #33CC66;">Cập nhật</button>
  </form>
</div>