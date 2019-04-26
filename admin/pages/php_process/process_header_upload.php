<?php
  require_once 'connection.php';

  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  $newFileName =  "00000_" . round(microtime(true)) . '.' . end($temp);
  $fileType = end($temp);
  $target_dir = "../../../video/";
  $target_file = $target_dir . "$newFileName";
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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



  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  } else {
    //Sletter indholdet i video-mappen
    $files = glob('../../../video/*'); // get all file names
    foreach($files as $file){ // iterate files
      if(is_file($file))
        unlink($file); // delete file
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $query = "DELETE FROM header";
      $results = mysqli_query($connection, $query);

      $query = "INSERT INTO header VALUES ('','$fileType','$newFileName')";
      $results = mysqli_query($connection, $query);
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
