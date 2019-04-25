<?php
require_once 'connection.php';

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $menu_item_description = htmlentities($_POST['menu_item_description']);
  $menu_item_price = htmlspecialchars($_POST['menu_item_price']);
  $id=$_GET['id'];
  $category = htmlspecialchars($_POST['hidden_category']);

  $query = "INSERT INTO selskabsmenu VALUES(
    '',/* ID ligger først i tablet og autoincrementes, derfor lades denne være blank */
    '$id',
    '$menu_item_name',
    '$menu_item_description',
    '$menu_item_price'
  )";
  $results = mysqli_query($connection, $query);

  if($results){
    header("Location: ../selskabsmenu.php#category_$category");
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($connection);

?>
