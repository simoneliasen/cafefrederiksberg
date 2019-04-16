<?php
  $connection = mysqli_connect('localhost','root','','admin');

  if(!$connection){
    die("Cannot connect to the database" . mysqli_connect_error());
  }

 ?>
