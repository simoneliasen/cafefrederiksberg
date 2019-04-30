<?php
  require_once '../../config.php';

  $link = htmlentities($_POST['link']);
  $header = htmlentities($_POST['header']);
  $subheader = htmlentities($_POST['subheader']);
  $text = htmlentities($_POST['text']);

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

header("location: ../forside.php");

mysqli_close($db);

?>
