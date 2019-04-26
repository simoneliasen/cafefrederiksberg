<?php
  require_once 'connection.php';
  var_dump($_FILES['fileToUpload']['name']);

  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  $newFileName =  "00000_" . round(microtime(true)) . '.' . end($temp);

  $fileType = end($temp);
  $target_dir = "../../../video/";
  //target_dir skal være noget andet hvis det er billede
  //evt bare tom til der kommer et sted hvor der bliver lavet noget på baggrund af fil valg
  $target_file = $target_dir . "$newFileName";
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $uploadOk = 1;
  $type = "";


  if($fileType == "mp4" or $fileType == "mpeg" or $fileType == "avi" or $fileType == "mov"){
    $type = "video";
  }elseif($imageFileType == "jpg" or $imageFileType == "png" or $imageFileType == "jpeg"
  or $imageFileType == "gif" ){
    $type = "billede";
  }else{
    $uploadOk = 0;
    echo "Kun video filer af typen mp4, mpeg, avi og mov er tilladt" . "<br>" . "Kun billede filer af typen jpg, png, jpeg og gif er tilladt" . "<br>";
  }

  if ($_FILES["fileToUpload"]["size"] > 100000000) {
    echo "Filen er for stor";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Filen blev ikke uploaded"  . "<br>";
  } else {
    //Sletter indholdet i video-mappen
    $files = glob('../../../video/*'); // get all file names
    foreach($files as $file){ // iterate files
      if(is_file($file))
        unlink($file); // delete file
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      if($type == 'video'){
        $query = "DELETE FROM header WHERE type = 'video'";
        $results = mysqli_query($connection, $query);
      }

      $query = "INSERT INTO header VALUES ('','$fileType','$newFileName','$type')";
      $results = mysqli_query($connection, $query);
      echo "Filen ". basename( $_FILES["fileToUpload"]["name"]). " er blevet uploaded.";

    } else {
      echo "Der var et problem med at uploade filen";
    }
  }

  if ($uploadOk == 1){
    header("Location: ../forside.php#præsentationsvideo");
    exit();
  }else {
    die("Kunne ikke forbinde til databasen");
  }
  mysqli_close($connection);

 ?>
