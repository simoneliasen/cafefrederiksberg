
<?php
require_once '../../config.php';

  $buffetName = htmlspecialchars($_POST['b_name']);
  $img = 'test img';

  $query = "INSERT INTO buffet VALUES(
    '',
    '$buffetName',
    '$img');";
  $results = mysqli_query($db, $query);
  if(!$results){
   echo '1';
}
  $query = "SELECT MAX(id) FROM buffet;";
  $buffetMax = mysqli_fetch_row(mysqli_query($db, $query));

  $query = "INSERT INTO buffetItems VALUES(
    '',
    '$buffetMax[0]',
    'Buffeten er tom!'
  );";
  $results = mysqli_query($db, $query);
  if(!$results){
   echo '2';
}
  $query = "INSERT INTO buffetpriser VALUES(
    '',
    '$buffetMax[0]',
    'ingen pris er angivet!',
    'N/A');";
  $results = mysqli_query($db, $query);
  if(!$results){
   echo '3';
 }


  //Get filename + extension from uploaded file
  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  //Name of file
  $fileName = strtolower(current($temp));
  // Filetype
  $imageFileType = strtolower(end($temp));
  //Buffet we want to upload img to
  $buffetNumber = $buffetMax[0];
  //Upload file with name of selected buffet + file extension
  $newfilename = 'Buffet' . $buffetNumber . '.' . end($temp);
  //Path to check for if file exist with any extension (used with glob later on)
  $mask = "../../../img/buffet_files/" . 'Buffet' . $buffetNumber . ".*";

  // Targetdir + file to upload
  $target_dir = "../../../img/buffet_files/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;

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

  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  elseif (glob($mask)) {
    array_map("unlink", glob($mask));
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../../../img/buffet_files/" . $newfilename)) {
      $uploadOk = 1;
    }
  else  pass;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 100000000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../../../img/buffet_files/" . $newfilename)) {
      echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
      echo "";
    }
  }

   if($results){
    header("Location: ../buffet.php#category_" . $buffeCategoryID);
     exit();
   }else {
     die("could not query the database");
   }


?>
