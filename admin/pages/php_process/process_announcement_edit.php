<?php
  require_once '../../config.php';

  $announcement = htmlentities($_POST['announcement']);
  $expirationdate = htmlentities(date('d-m-Y', strtotime($_POST['date'])));

  $query = "UPDATE announcements SET info = '$announcement', removaldate = '$expirationdate' WHERE id = 1";
  $results = mysqli_query($db, $query);

 if($results){
   header("location: ../forside.php");
   exit();
 }else {
   die("could not query the database");
 }

  mysqli_close($db);
 ?>
