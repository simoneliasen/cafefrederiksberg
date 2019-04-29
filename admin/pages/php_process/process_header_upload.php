<?php
  require_once 'connection.php';

  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $type = "";
  $target_dir = "";
  $fileType = strtolower(end($temp));

  if ($_FILES["fileToUpload"]["size"] == 0){
    $uploadOk = 0;
    echo "der er ikke valgt en fil til upload";
    header("Location: ../forside.php#præsentationsvideo");
    exit();
  }

  if ($_FILES["fileToUpload"]["size"] > 100000000) {
    echo "Filen er for stor";
    $uploadOk = 0;
  }

  //tjekker om det er billede eller video fil i accepterede formater
  if($fileType == "mp4" or $fileType == "mpeg" or $fileType == "avi" or $fileType == "mov"){
    $target_dir = "../../../video/"; //sætter filstien for upload
    $type = "video"; //sætter typen til video
    $newFileName =  "00000_" . round(microtime(true)) . '.' . $fileType;

  }elseif($fileType == "jpg" or $fileType == "png" or $fileType == "jpeg"
  or $fileType == "gif" ){
    $target_dir = "../../../header_slide/";
    $type = "billede";
    $newFileName = reset($temp) . "." . $fileType;
  }else{
    $uploadOk = 0; //hvis det ikke er accepterede filformater skal uploadOK være 0
    echo "Kun video filer af typen mp4, mpeg, avi og mov er tilladt" . "<br>" . "Kun billede filer af typen jpg, png, jpeg og gif er tilladt" . "<br>";
    //fejlkode for brugeren.
  }

  //definerer filstien og det nye filnavn
  $target_file = $target_dir . "$newFileName";

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Filen blev ikke uploaded"  . "<br>";
  } else {
    //hvis filtypen = video, skal den tidligere video slettes.
    if($type == "video"){
      $files = glob('../../../video/*'); // find mappen med videofilen
      foreach($files as $file){ // loop igennem mappen (sikkerhed hvis der er af en eller anden grund ligger mere end én video.)
        if(is_file($file)) //hvis der er en fil gør:
          unlink($file); // delete file
      }
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      if($type == 'video'){
        $query = "DELETE FROM header WHERE type = 'video'";
        $results = mysqli_query($connection, $query);
      }

      $query = "INSERT INTO header VALUES ('','$fileType','$newFileName','$type')";
      $results = mysqli_query($connection, $query);
      echo "Filen ". basename($_FILES["fileToUpload"]["name"]). " er blevet uploaded.";

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
