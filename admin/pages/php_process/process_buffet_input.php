<?php
require_once '../../config.php';

  $id = '';
  $buffetNumber = '';
  $buffetItem = htmlentities($_POST['menu_item_name']);
  $buffetName = htmlspecialchars($_POST['hidden_category']);
  $img = 'test img';

  $query = "INSERT INTO buffet VALUES(
    /* ID ligger først i tablet og autoincrementes, derfor lades denne være blank */
    '$id',
    '$buffetName',
    '$buffetNumber',
    
    '$buffetItem',
    '$img'
  )";
  $results = mysqli_query($db, $query);


   if($results){
     header("Location: ../buffet.php#category_$hidden_category");
     exit();
   }else {
     die("could not query the database");
   }


?>

