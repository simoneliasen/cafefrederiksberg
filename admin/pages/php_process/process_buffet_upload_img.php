<?php
require_once '../../config.php';

//Get filename + extension from uploaded file
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
//Name of file
$fileName = strtolower(current($temp));
echo ($fileName);
// Filetype
$imageFileType = strtolower(end($temp));
echo ($imageFileType);
//Buffet we want to upload img to
echo $_POST["buffetNumber"];

// Targetdir + file to upload
$target_dir = "../../../img/buffet_files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


$newFileName = 'funny'; // New unique file name
move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/upload/{$newFileName}.mp4");



// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists and replaces it if it does
if (file_exists($target_file)) {
  unlink($target_file);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
  }
  // $uploadOk = 1;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
  } else {
    echo "";
  }
}
// Redirect back to page
if ($uploadOk == 1) {
  header("Location: ../buffet.php");
  exit();
} else {
  die("Kunne ikke forbinde til databasen");
}


