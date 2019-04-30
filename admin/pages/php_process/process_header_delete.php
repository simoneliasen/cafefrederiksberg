<?php
require_once '../../config.php';

  $id = $_GET['id'];

  $query = "SELECT * FROM header WHERE id ='$id'";
  $results = mysqli_query($db, $query);
  $fileNameArray = mysqli_fetch_assoc($results);
  $fileName = $fileNameArray['filename'];

  unlink("../../../header_slide/$fileName");

  $query = "DELETE FROM header WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../generelt.php#præsentationsvideo");
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);

?>
