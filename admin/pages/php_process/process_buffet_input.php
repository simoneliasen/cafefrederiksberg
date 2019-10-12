<?php
require_once '../../config.php';

  $buffetNumber = ...;

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $id=$_GET['id'];
  $category = htmlspecialchars($_POST['hidden_category']);

  $query = "INSERT INTO buffet VALUES(
    '$id',/* ID ligger først i tablet og autoincrementes, derfor lades denne være blank */
    '$buffetName',
    '$buffetNumber',
    '$buffetitem',
    ''
  )";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../buffet.php#category_$category");
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);

?>
