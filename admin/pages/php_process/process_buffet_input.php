<?php
require_once 'connection.php';

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $id=$_GET['id'];
  $category = htmlspecialchars($_POST['hidden_category']);

  $query = "INSERT INTO buffet VALUES(
    '$id',/* ID ligger først i tablet og autoincrementes, derfor lades denne være blank */
    '$menu_item_name',
    '$category'
  )";
  $results = mysqli_query($connection, $query);

  if($results){
    header("Location: ../buffet.php#category_$category");
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($connection);

?>
