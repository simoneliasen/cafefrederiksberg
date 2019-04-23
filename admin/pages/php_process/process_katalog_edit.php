<?php

  require_once 'connection.php';

  $link = htmlentities($_POST['link']);
  $header = htmlentities($_POST['header']);
  $subheader = htmlentities($_POST['subheader']);
  $text = htmlentities($_POST['text']);



  $query = "UPDATE katalog SET link = '$link', header = '$header', subheader = '$subheader', text = '$text' WHERE id = 1";


  $results = mysqli_query($connection, $query);



 if($results){
   header("location: ../forside.php");
   exit();
 }else {
   die("could not query the database");
 }

  mysqli_close($connection);

 ?>
