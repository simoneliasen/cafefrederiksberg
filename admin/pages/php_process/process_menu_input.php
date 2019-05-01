<?php
require_once '../../config.php';

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $menu_item_description = htmlentities($_POST['menu_item_description']);
  $menu_item_price = htmlspecialchars($_POST['menu_item_price']);

  $query = "INSERT INTO menu VALUES(
    '',/* ID ligger først i tablet og autoincrementes, derfor lades denne være blank */
    '$menu_item_name',
    '$menu_item_description',
    '$menu_item_price'
  )";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../restaurant.php");
    exit();
  }else {
    die("could not query the database");
  }

  $query ="SELECT * FROM menu";

  var_dump($results);
  var_dump($query);

mysqli_close($db);

?>
