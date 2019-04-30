<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Admin-dashboard</title>

  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">

</head>

<body>

  <?php
  //Opretter forbindelse via config.php, og tjekker om du er logget ind via session.php
  include('../session.php');
  ?>

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="analytics.php">Google analytics</a></li>
    <li><a href="generelt.php">Generelt</a></li>
    <li><a href="restaurant.php">Restaurant</a></li>
    <li><a href="bar.php">Bar</a></li>
    <li><a href="selskabsmenu.php">Selskabsmenu</a></li>
    <li><a href="buffet.php">Buffet</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="hjælp.php" class="active">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Hjælp<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button2 button_logout" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">

      <h1 class="task_heading">Sådan bruges admin-panelet</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat consequat mauris nunc congue nisi. Felis eget velit aliquet sagittis id. Convallis convallis tellus id interdum velit. Nunc vel risus commodo viverra maecenas accumsan. Mi quis hendrerit dolor magna eget est lorem ipsum. Placerat orci nulla pellentesque dignissim enim sit. Pellentesque id nibh tortor id aliquet lectus proin nibh. Faucibus nisl tincidunt eget nullam non. Consectetur adipiscing elit pellentesque habitant morbi. Quis varius quam quisque id diam vel.</p>

      <h1 class="task_heading">En overskrift mere der fortæller noget om noget</h1>
      <div class="img_center">
        <img src="/cafefrederiksberg/img/logo.svg" id="" width="auto" height="auto">
      </div>


    </div>






  </div>
</div>

</body>

</html>
