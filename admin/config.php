<?php

// Database Credentials for connection
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'admin');
 // Attempts to connect to MysQl database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// checks connection (displays error message if unavaliable)
if(!$db){
   die("cannot connect to database".mysqli_connect_error());
}
// Gør at vi kan vise ÆØÅ
mysqli_set_charset($db,"utf8");
 ?>
