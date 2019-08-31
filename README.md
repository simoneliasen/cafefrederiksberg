## Quick guide to getting the website running

### 1. Set the base href in header.php to your sites index.php location (in the root folder)
ex. base href="http://localhost/cafefrederiksberg/index.php"

### 2. Change server connection info
ex $db = mysqli_connect('localhost','user','password','admin');

This should be done in the following files

- header.php

- announcement.php

- footer.php

- tidslinje.php

- config.php

### 3. Download the SQL-database (found in the folder db_setup) & upload it to phpmyadmin
To setup local server, run the sql query found in the folder "db_setup" into the cmd prompt in the repository folder.

## Screenshot of front-page:
![alt text](http://korius.dk/github/frederiksberg.PNG)

Deployment of the site can be seen at:
https://cafefrederiksberg.dk/
