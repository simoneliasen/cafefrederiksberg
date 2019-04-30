<?php
  require_once '../../config.php';

  $header_choice = htmlentities($_POST['type']);

  $query = "UPDATE header SET type = '$header_choice' WHERE id = '1';";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../forside.php");
    exit();
  }else {
    die("could not query the database");
  }

  mysqli_close($db);

?>
