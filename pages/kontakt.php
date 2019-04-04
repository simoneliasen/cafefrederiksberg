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
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>


<!--Indsætter navigationsbar fra filen includes/navigation.php-->
<?php include '../includes/navigation.php'; ?>

<!-- Indsætter slider  -->
<div class="content slider">
  <?php include '../includes/header.php'; ?>
</div>


<div class="wrapper kontakt">
  <div class="bg_dark">
    <div class="container kontakt_info">
      <div class="kontakt_info_buttons">
        <div class="row kontakt_info">
          <!--Opsætter kolonner der hver fylder 3 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
          <div class="six columns">
            <div class="Bestil_online"><h2>Bestil online:</h2></div>
          </div>
          <div class="two columns">
            <a class="button button-primary bestil" href="#">Bord</a>
          </div>
          <div class="two columns">
            <a class="button button-primary bestil" href="#">Biletter</a>
          </div>
          <div class="two columns">
            <a class="button button-primary bestil" href="#">Take-away</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container opening_info"
</div>

<!--Google maps placeholder  -->
<center>
  <div class="mapouter">
    <div class="gmap_canvas"><iframe width="1920" height="575" id="gmap_canvas" src="https://maps.google.com/maps?q=Caf%C3%A9%20Frederiksberg%20Aalborg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div>
    <style>
      .mapouter {
        position: relative;
        text-align: right;
        height: 575px;
        width: 1920px;
      }

      .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 575px;
        width: 1920px;
      }
    </style>
  </div>
</center>


<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
