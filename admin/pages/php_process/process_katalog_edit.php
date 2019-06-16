<?php
  require_once '../../config.php';

  $link = htmlentities($_POST['link']);
  $header = htmlentities($_POST['header']);
  $subheader = htmlentities($_POST['subheader']);
  $text = htmlentities($_POST['text']);

  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $target_dir = "../../../img/";
  $fileType = strtolower(end($temp));


  if ($_FILES["fileToUpload"]["size"] == 0){
    $uploadOk = 0;
    echo "der er ikke valgt en fil til upload";
    exit();
  }

  if ($_FILES["fileToUpload"]["size"] > 100000000) {
    echo "Filen er for stor";
    $uploadOk = 0;
  }

  if ($fileType == "jpg" or $fileType == "png" or $fileType == "jpeg" or $fileType == "gif" ){
    $newFileName =  "0_" . round(microtime(true)) . '.' . $fileType;
  }
  //definerer filstien og det nye filnavn
  $target_file = $target_dir . "$newFileName";

  if ($uploadOk == 0){
    echo "filen blev ikke uploaded";
  } elseif(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $query = "UPDATE katalog SET img ='$newFileName' WHERE id=1;";
    $results = mysqli_query($db, $query);
    echo "Filen ". basename($_FILES["fileToUpload"]["name"]). " er blevet uploaded.";
  } else {
    echo "Der var et problem med at uploade filen";
  }



if(!empty($link)) {
$linkquery = "UPDATE katalog SET link='$link' WHERE id=1;";
$linkresults = mysqli_query($db, $linkquery);}

if(!empty($header)) {
$headerquery = "UPDATE katalog SET header='$header' WHERE id=1;";
$headerresults = mysqli_query($db, $headerquery);}

if(!empty($subheader)) {
$subheaderquery = "UPDATE katalog SET subheader='$subheader' WHERE id=1;";
$subheaderresults = mysqli_query($db, $subheaderquery);}

if(!empty($text)) {
$textquery = "UPDATE katalog SET text='$text' WHERE id=1;";
$textresults = mysqli_query($db, $textquery);}

if ($uploadOk == 1){
  header("Location: ../generelt.php");
  exit();
}else {
  die("Kunne ikke forbinde til databasen");
}
mysqli_close($db);

?>
