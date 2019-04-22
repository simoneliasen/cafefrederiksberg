<?php
  include 'connection.php';

  $menu_item_index = htmlspecialchars($_POST['menu_item_index']);
  $menu_item_name = htmlentities($_POST['menu_item_name']);
  $menu_item_description = htmlentities($_POST['menu_item_description']);
  $menu_item_price = htmlspecialchars($_POST['menu_item_price']);
  $id = $_GET['id'];

  $query = "UPDATE menu SET
    name = '$menu_item_name',
    description ='$menu_item_description',
    price = '$menu_item_price'
    WHERE id = '$id'";

  $results = mysqli_query($connection, $query);



  var_dump($menu_item_index);
    echo "<br>";
  var_dump($id);
  echo "<br>";

  if($id != $menu_item_index){
    echo "index er forskellig fra tidligere";
    // if($id == )
  }else{
    echo "index er identisk med tidligere index";
  }

  $query_2 ="SELECT * FROM menu";
  $results_2 = mysqli_query($connection,$query_2);
  echo "<br>";
  var_dump($results_2);
  echo "<br>";
  var_dump($query_2);
  $row = mysqli_fetch_row($results_2);
  var_dump($row);
  echo "<br>";
  while($row = mysqli_fetch_row($results_2)):
    echo "$row[0], ";
    
  endwhile;






  if($results){
    // header("Location: ../restaurant.php");
    // exit();
  }else {
    die("could not query the database");
  }




  mysqli_close($connection);

 ?>
