<?php
require_once '../../config.php';

$buffetNumber = $_GET['id'];
$buffetDesc = htmlspecialchars($_POST['buffetDesc_add']);
$buffetPrice = htmlspecialchars($_POST['buffetPrice_add']);

echo $buffetNumber;
echo $buffetDesc;
echo $buffetPrice;

  $query = "INSERT INTO buffetpriser VALUES(
    '',
    '$buffetNumber',
    '$buffetDesc',
    '$buffetPrice')";
  $results = mysqli_query($db, $query);


  if($results){
   header("Location: ../buffet.php#category_" . $buffeCategoryID);
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);
?>
