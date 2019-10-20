<?php
require_once '../../config.php';

  $id = $_GET['id'];
  $query = "DELETE FROM buffet WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  $query = "DELETE FROM buffetitems WHERE buffetNumber = '$id'";
  $results = mysqli_query($db, $query);

  $query = "DELETE FROM buffetpriser WHERE buffetNumber = '$id'";
  $results = mysqli_query($db, $query);


  $path = '../../../img/buffet_files/' ;

  $files = glob('../../../img/buffet_files/*'); // find mappen med videofilen
  foreach($files as $file){ // loop igennem mappen (sikkerhed hvis der er af en eller anden grund ligger mere end én video.)
    $ext = explode(".", $file);
    $filename = 'Buffet' . $id . '.' . strtolower(end($ext));
    echo $path . $filename;
    if(file_exists ($path . $filename ) ){
      unlink($path . $filename);
      echo "jello";
    }
  }


  if($results){
   header("Location: ../buffet.php#category_" . $buffeCategoryID);
    exit();
  }else {
    die("could not query the database");
  }

mysqli_close($db);
?>
