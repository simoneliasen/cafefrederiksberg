<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>

  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>


<!--Indsætter navigationsbar fra filen includes/navigation.php-->
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/header.php'; ?>

<div class="wrapper onlineBestilling">
    <div class="container onlineBestilling">
      <div class="row onlineBestilling">
        <div class="six columns bestilonline">
          <div class="Bestil_onlineindex">
            <h2 id="bestilonlineheader">Bestil online:</h2>
          </div>
        </div>
        <div class="two columns bestilonline">
          <a class="button button-primary bestil" href="pages/booking.php">Bord</a>
        </div>
        <div class="two columns bestilonline">
          <a class="button button-primary bestil" href="pages/booking.php">Biletter</a>
        </div>
        <div class="two columns bestilonline">
          <a class="button button-primary bestil" href="pages/booking.php">Take-away</a>
        </div>
      </div>
    </div>
  </div>

<div class="container">

<h2 id="restaurant_overskrift">Menukort</h2>

</div>


<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
