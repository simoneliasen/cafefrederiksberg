<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Café Frederiksberg sørger både for en god buffet, en skræddersyet menu til dit selskab, udlejning af lokaler, eller blot nogle hyggelige rammer til dit selskab her i Aalborg"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include '../includes/announcement.php'; ?>
  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include '../includes/navigation.php'; ?>
  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../includes/header.php'; ?>

<div class="selskaber_wrapper">
  <div class="container arrangementer">


      <div class="row">
        <div class="one-half column">
          <img src="img/buffet_placeholder.png.jpg" width="370rem" height="auto">
        </div>
        <div class="one-half column">
          <span class="selskab_text_title"> Vi byder på lokaler til selskaber, arrangementer og lækre buffeter!</span><br>
          <p style="width: 400px;">Lorem ipsum dolor sit amet, consectetur
             adipisicing elit, sed do eiusmod tempor incididunt ut labore et
             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
             exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat.Duis aute irure dolor in reprehenderit in voluptate
             velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
             occaecat cupidatat non proident, sunt in culpa qui officia
             deserunt mollit anim id est laborum.</p>

          <p style="font-size: 1.2rem;"><strong> Se vores udvalg her </strong></p>
              <a class="button" href="pages/selskaber/buffet.php">Buffet</a>
              <a class="button" href="pages/selskaber/arrangementer.php">Arrangementer</a>
              <a class="button" href="pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
              <p> Eller kontakt os på telefon eller mail for at høre mere. </p>
              <p> <strong>Telefon:</strong> 23603949 </p>
              <p> <strong>Mail:</strong> Cafefrede@live.dk </p>
        </div>
        </div>


      </div>
    </div>



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
