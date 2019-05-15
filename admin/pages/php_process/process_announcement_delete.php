<?php
  require_once '../../config.php';

  $announcement = ' ';
  $expirationdate = date('19-04-1997');

  $query = "UPDATE announcements SET info = '$announcement', removaldate = '$expirationdate'";
  $results = mysqli_query($db, $query);

 if($results){
   header("location: ../generelt.php");
   exit();
 }else {
   die("could not query the database");
 }

  mysqli_close($db);
 ?>
