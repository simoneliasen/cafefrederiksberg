### Continuous updates will be made on the project after handing in.
Find the newest updates here: https://github.com/simoneliasen/cafefrederiksberg

A working prototypes is uploaded to: https://www.korius.dk/

Widgets and thridparty implementations are not working as they are to be configured with our collaborator.

### Quick guide to getting the website running

### 1. Set the base href in header.php to your sites index.php location (in root folder)
ex. base href="http://localhost/cafefrederiksberg/index.php"

### 2. Change server connection info
ex $db = mysqli_connect('localhost','user','password','admin');

This should be done in the following files

header.php
announcement.php
footer.php
config.php

### 3. Download the SQL-database (found in branch "database") & upload it to phpmyadmin

To setup local server, copy the script from "db setup" into the cmd prompt.
Make sure to have xampp installed and make sure that the directory is at C:\xampp\mysql\bin
