<?php

// Database information for connection
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'admin');

 // Samler db informationer i variablet $db og connecter til db
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Displays error if connection is unavaliable
if(!$db){
   die("cannot connect to database".mysqli_connect_error());
}

 ?>