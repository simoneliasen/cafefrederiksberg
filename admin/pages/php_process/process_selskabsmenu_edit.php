<?php
  require_once '../../config.php';

  $id = $_GET['id'];

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $menu_item_description = htmlentities($_POST['menu_item_description']);
  $menu_item_price = htmlspecialchars($_POST['menu_item_price']);
  $menu_item_index = htmlspecialchars($_POST['menu_item_index']);
  $category = htmlspecialchars($_POST['hidden_category']);

  $query = "UPDATE selskabsmenu SET name = '$menu_item_name', description ='$menu_item_description', price = '$menu_item_price' WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../selskabsmenu.php#category_$category");
    exit();
  }else {
    die("could not query the database");
  }

  mysqli_close($db);
 ?>
