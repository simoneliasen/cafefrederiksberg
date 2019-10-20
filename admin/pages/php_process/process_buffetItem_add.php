<?php
require_once '../../config.php';

$id = '';
$buffetItem = htmlspecialchars($_POST['buffetItem_add']);

  $id = $_GET['id'];
  $query = "INSERT INTO buffetItems VALUES(
    '',
    '$id',
    '$buffetItem')";
  $results = mysqli_query($db, $query);


  if($results){
   header("Location: ../buffet.php#category_" . $buffeCategoryID);
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);
?>
