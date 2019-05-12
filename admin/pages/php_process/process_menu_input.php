<?php
require_once '../../config.php';

  $m_pos = htmlentities($_POST['m_pos']);
  $m_name = htmlentities($_POST['m_name']);
  $m_desc = htmlentities($_POST['m_desc']);
  $m_price = htmlspecialchars($_POST['m_price']);

  $query = "INSERT INTO menu (m_pos, m_name, m_desc, m_price) VALUES(
    '$m_pos',
    '$m_name',
    '$m_desc',
    '$m_price'
  )";

  $results = mysqli_query($db, $query);

  if($results){
    header("Location: ../restaurant.php");
    exit();
  }else {
    die("could not query the database");
  }

  $query ="SELECT * FROM menu";

  var_dump($results);
  var_dump($query);

mysqli_close($db);

?>
