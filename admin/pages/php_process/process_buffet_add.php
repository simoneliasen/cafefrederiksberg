
<?php
require_once '../../config.php';

  $id = '';
  $buffetName = htmlspecialchars($_POST['b_name']);
  $img = 'test img';

  $query = "INSERT INTO buffet VALUES(
    '$id',
    '$buffetName',
    '$img'
  )";
  $results = mysqli_query($db, $query);

  $query = "SELECT MAX(id) FROM buffet;";
  $buffetMax = mysqli_fetch_row(mysqli_query($db, $query));
  echo $buffetMax[0];

  $query = "INSERT INTO buffetItems VALUES(
    '$id',
    '$buffetMax[0]',
    'Buffeten er tom'
  )";
  $results = mysqli_query($db, $query);

   if($results){
    header("Location: ../buffet.php#category_" . $buffeCategoryID);
     exit();
   }else {
     die("could not query the database");
   }


?>
