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


  $query ="SELECT * FROM menu;";
  $results = mysqli_query($db,$query);
  $i = 1;

  while($row = mysqli_fetch_row($results)):
    if($row[1] < $menu_item_indeks){
      $query = "UPDATE menu SET indeks = '$i' where id = '$row[0]'";
      $indeks_results = mysqli_query($db, $query);
      $i++;
    }

    if($row[1] == $menu_item_indeks){
      $query = "UPDATE menu SET indeks = '$i' where id = '$row[0]'";
      $indeks_results = mysqli_query($db, $query);
      $i+= 2;
    }

    if($row[1] > $menu_item_indeks){
      $i++;
      $query = "UPDATE menu SET indeks = '$i' where id = '$row[0]'";
      $indeks_results = mysqli_query($db, $query);
    }



    echo "$i ";

  endwhile;


  if($results){
    // header("Location: ../restaurant.php");
    // exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);


?>
