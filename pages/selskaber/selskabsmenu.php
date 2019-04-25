<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Sammensæt din helt egen menu, med forret, hovedret, dessert og natmad til dit selskab hos Café Frederiksberg."/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include '../../includes/announcement.php'; ?>
  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include '../../includes/navigation.php'; ?>
  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../../includes/header.php'; ?>

  <!--Opret forbindelse til database  -->
  <?php
  $connection = mysqli_connect('localhost', 'root', '', 'admin');
  if(!$connection){
    die("Cannot connect to the database".mysqli_connect_error());
  }
  ?>

  <div class="container">
    <div class="row selskab_present">
      <div class="one-half column selskab_present_img">
      </div>

      <div class="one-half column">
        <h2>Selskabsmenu</h2>
        <h6>Sammensæt din egen selskabsmenu</h2>
        <p>Vælg mellem en lang række foretter, hovedretter deserter og natmad. Sammensæt selv en lækker menu hvor du får lige præcis det du kunne tænke dig.<br>
        Ring og hør mere eller bestil allrede nu!</p>
        <p>På telefon: (+45) 98 12 03 83</p>
        <p>Eller send en email: frederiksbergselskaber@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="bg_dark">
    <div class="menu_kort_spacer"></div>

    <div class="container">
      <div class="row">
        <div class="menu_kort">

          <!--FORETTER-->
          <h2 class="menu_kort_overskrift">Foretter</h2>
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='forret';";
          $results = mysqli_query($connection,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name"><?= $row[1] ?></div>
              <div class="menu_item_price"><?=$row[3] ?></div>
              <div class="menu_item_description"><?=$row[2] ?></div>
            </div>
        <?php endwhile;?>

          <!--HOVEDRETTER-->
          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Hovedretter</h2>
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='hovedret';";
          $results = mysqli_query($connection,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name"><?= $row[1] ?></div>
              <div class="menu_item_price"><?=$row[3] ?></div>
              <div class="menu_item_description"><?=$row[2] ?></div>
            </div>
        <?php endwhile;?>

          <!--DESSERTER-->
          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Desserter</h2>
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='dessert';";
          $results = mysqli_query($connection,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name"><?= $row[1] ?></div>
              <div class="menu_item_price"><?=$row[3] ?></div>
              <div class="menu_item_description"><?=$row[2] ?></div>
            </div>
        <?php endwhile;?>


          <!--NATMAD-->
          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Natmad</h2>
          <!-- Laver query fra table hvor katergorien er angivet som hovedret  -->
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='natmad';";
          $results = mysqli_query($connection,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name"><?= $row[1] ?></div>
              <div class="menu_item_price"><?=$row[3] ?></div>
              <div class="menu_item_description"><?=$row[2] ?></div>
            </div>
        <?php endwhile;
         mysqli_close($connection);?>

          <!--EKSTRA INFO-->
          <p class="menu_allergener" style="margin-top:6rem; text-align: center;">*Gæster kan få oplysninger om allergerner ved at henvende sig til personalet</p>
          <div class="menu_kontrolrapport">
            <p>Se vores kontrolrapport: </p>
            <a href="https://www.findsmiley.dk/25727" target="_blank">
              <img src="img/kontrolrapport.jpeg" width="80px;" border="0">
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php include '../../includes/footer.php'; ?>

</body>
</html>
