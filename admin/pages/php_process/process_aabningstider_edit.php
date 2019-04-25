<?php

  require_once 'connection.php';


  $id = $_GET['id'];
  $aabningstiderDate = htmlentities($_POST['date']);
  $timeFrame = htmlentities($_POST['timeframe']);

  $query = "UPDATE aabningstider SET date = '$aabningstiderDate', timeframe ='$timeFrame' WHERE id=$id;";

  $results = mysqli_query($connection, $query);


  if($results){
    header("Location: ../kontakt.php");
    exit();
  }else {
    die("could not query the database");
  }




  mysqli_close($connection);

 ?>