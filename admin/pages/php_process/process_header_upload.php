<?php
  require_once 'connection.php';

  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  // $newFileName =  "00000_" . round(microtime(true)) . '.' . end($temp);

  $target_dir = "../../../video/";
  echo "$newFileName";
  $uploadOk = 1;

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  // if (file_exists($target_file)) {
  //     echo "Sorry, file already exists.";
  //     $uploadOk = 0;
  // }
  // Check file size
  // if ($_FILES["fileToUpload"]["size"] > 100000000) {
  //     echo "Sorry, your file is too large.";
  //     $uploadOk = 0;
  // }
  // Allow certain file formats
  if($videoFileType != "mp4" &&$videoFileType != "png" &&$videoFileType != "jpeg"
  &&$videoFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    $files = glob($target_dir . '*'); // get all file names
    foreach($files as $file){ // iterate files
      if(is_file($file))
      unlink($file); // delete file
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }

    if ($uploadOk == 1){
      header("Location: ../forside.php");
      exit();
    }else {
      die("could not query the database");
    }






  mysqli_close($connection);

 ?>
