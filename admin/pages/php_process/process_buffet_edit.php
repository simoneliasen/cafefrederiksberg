<?php
  require_once '../../config.php';

  $id = $_GET['id'];

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $category = htmlspecialchars($_POST['hidden_category']);

  $query = "UPDATE buffet SET name = '$menu_item_name' WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../buffet.php#category_$category");
    exit();
  }else {
    die("could not query the database");
  }

  mysqli_close($db);
 ?>
