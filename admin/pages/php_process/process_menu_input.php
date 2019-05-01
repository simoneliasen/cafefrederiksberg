<?php
require_once '../../config.php';

  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $menu_item_description = htmlentities($_POST['menu_item_description']);
  $menu_item_price = htmlspecialchars($_POST['menu_item_price']);
  $menu_item_indeks = htmlspecialchars($_POST['menu_item_indeks']);

  $query = "INSERT INTO menu VALUES(
    '',/* ID ligger først i tablet og autoincrementes, derfor lades denne være blank */
    '$menu_item_indeks',
    '$menu_item_name',
    '$menu_item_description',
    '$menu_item_price'
  )";
  $results = mysqli_query($db, $query);


  $query = "";
  $results = mysqli_query($db, $query);


  if($results){
    // header("Location: ../restaurant.php");
    // exit();
  }else {
    die("could not query the database");
  }

  $query ="SELECT * FROM menu";

mysqli_close($db);

?>
