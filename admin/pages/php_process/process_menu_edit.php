<?php

  require_once 'connection.php';



  $id = $_GET['id'];

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $menu_item_description = htmlentities($_POST['menu_item_description']);
  $menu_item_price = htmlspecialchars($_POST['menu_item_price']);
  $menu_item_index = htmlspecialchars($_POST['menu_item_index']);


  $query = "UPDATE menu SET name = '$menu_item_name', description ='$menu_item_description', price = '$menu_item_price' WHERE id = '$id'";

  $results = mysqli_query($connection, $query);








  if($results){
    header("Location: ../restaurant.php");
    exit();
  }else {
    die("could not query the database");
  }




  mysqli_close($connection);

 ?>
