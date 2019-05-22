# Quick guide to get the website running on your machine



1. Set the base href in header.php to your sites index.php location (in root folder)
ex. base href="http://localhost/cafefrederiksberg/index.php"



2. Change server connection info
ex $db = mysqli_connect('localhost','user','password','admin');

This should be done in the following files
- header.php
- announcement.php
- footer.php
- config.php


3. Download the SQL-database (found in branch "database")
