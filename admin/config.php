<?php
// Database Credentials for connection
define('DB_SERVER', 'mysql4.unoeuro.com');
define('DB_USERNAME', 'korius_dk');
define('DB_PASSWORD', 'qbj23ezn');
define('DB_DATABASE', 'korius_dk_db');
 // Attempts to connect to MysQl database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// checks connection (displays error message if unavaliable)
if(!$db){
   die("cannot connect to database".mysqli_connect_error());
}
// Gør at vi kan vise ÆØÅ
mysqli_set_charset($db,"utf8");
 ?>
