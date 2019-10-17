<?php
  require_once '../../config.php';

  $id = $_GET['id'];
  $buffetItem = htmlentities($_POST['menu_item_name']);
  $buffetName = $_POST['hidden_category'];

  $query = "UPDATE buffetItems SET buffetItem = '$buffetItem' WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
     header("Location: ../buffet.php#category_$buffetName");
    exit();
  }else {
    die("could not query the database");
  }

  mysqli_close($db);
