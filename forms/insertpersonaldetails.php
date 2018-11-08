
<?php			

require_once('connect.php');

if (isset($_POST['btnSave'])){
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $bday = $_POST['bday'];
  $email = $_POST['email'];
  $contactno = $_POST['contactno'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  //$image = $_POST['image'];
  $civil = $_POST['civil'];
  $religion = $_POST['religion'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $id = $_SESSION['user_id'];

  //file upload
  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    //echo $imageFileType;
      
  $sql = "INSERT INTO personaldetail (UserAccountId, Image, Address, CivilStatus, Height, Weight, Religion)
  VALUES('$id', '$target_file', '$address', '$civil', '$height', '$weight','$religion')";
  $q = mysqli_query($con,$sql);
  
  if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }

  // if (!$q){
  //   echo "error in the transaction";
  // }else{
  //   echo "successfully saved";
  // }
  $con->close();
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
//if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
  

