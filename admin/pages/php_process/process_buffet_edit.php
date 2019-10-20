<?php
  require_once '../../config.php';

  $id = $_GET['id'];
  $buffetItem = htmlentities($_POST['menu_item_name']);

  $query = "SELECT buffetNumber FROM buffetItems WHERE id = $id";
  $return = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($return);

  $query = "UPDATE buffetItems SET buffetItem = '$buffetItem' WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
     header("Location: ../buffet.php#section_" . $row['buffetNumber']);
    exit();
  }else {
    die("could not query the database");
  }

  mysqli_close($db);
