<?php
require_once '../../config.php';

  $id = $_GET['id'];
  $query = "DELETE FROM buffet WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  $query = "DELETE FROM buffetItems WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../buffet.php#category_$buffetName");
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);
?>
