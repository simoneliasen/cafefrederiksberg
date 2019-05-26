<?php 
require_once '../../config.php';

  $id = $_GET['id'];
  $query = "DELETE FROM barmenu WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
header("Location: ../bar.php?");
    exit();
  }else {
    die("could not query the database");
  }
mysqli_close($db);
?>
