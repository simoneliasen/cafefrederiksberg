<?php

// Database information for connection
$servername = "localhost";
$username = "username";
$password = "password";

// Connects to Database
$connection = mysqli_connect('localhost','root','','contactsapp');

// Displays error if connectionis unavaliable
if(!$connection){
   die("cannot connect to database".mysqli_connect_error());
}

 ?>