<?php
require_once '../../config.php';

  $id = $_GET['id'];

  $query = "DELETE FROM menu WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../restaurant.php");
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);
?>
