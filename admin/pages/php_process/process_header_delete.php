<?php
require_once 'connection.php';

  $id = $_GET['id'];

  $query = "SELECT * FROM header WHERE id ='$id'";
  $results = mysqli_query($connection, $query);
  $fileNameArray = mysqli_fetch_assoc($results);
  $fileName = $fileNameArray['filename'];

  unlink("../../../header_slide/$fileName");


  $query = "DELETE FROM header WHERE id = '$id'";

  $results = mysqli_query($connection, $query);



  if($results){
    header("Location: ../forside.php#præsentationsvideo");
    exit();
  }else {
    die("could not query the database");
  }




mysqli_close($connection);

?>
