<?php
  require_once '../../config.php';

  $id = $_GET['id'];

  $m_pos = htmlentities($_POST['m_pos']);
  $m_name = htmlentities($_POST['m_name']);
  $m_desc = htmlentities($_POST['m_desc']);
  $m_price = htmlspecialchars($_POST['m_price']);

  $query = "UPDATE menu SET m_pos = '$m_pos', m_name = '$m_name', m_desc ='$m_desc', m_price = '$m_price' WHERE id = '$id'";
  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../restaurant.php");
    exit();
  }else {
    die("could not query the database");
  }

  mysqli_close($db);
 ?>
