<?php
require_once '../../config.php';


  $item_pos = htmlspecialchars($_POST['item_pos']);
  $item = htmlentities($_POST['item']);
  $item_desc = htmlentities($_POST['item_desc']);
  $item_price = htmlspecialchars($_POST['item_price']);

  if(empty($item_pos)){
    echo "do something";
  }else{
    echo "yaaaa";
  }


  var_dump($item_pos);

  $query = "SELECT item_pos FROM menu;";
  $results = mysqli_query($db,$query);
  $pos_results = mysqli_fetch_assoc($results);

  while($row = mysqli_fetch_row($results)):
    var_dump($row);
  endwhile;

  $query = "INSERT INTO menu VALUES('','$item_pos','$item','$item_desc','$item_price')";
  $results = mysqli_query($db, $query);







  // if($results){
  //   // header("Location: ../restaurant.php");
  //   // exit();
  // }else {
  //   die("could not query the database");
  // }

mysqli_close($db);


?>
