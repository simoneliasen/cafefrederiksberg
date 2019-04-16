<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Kom forbi og oplev vores menu, bestil online eller benyt dig af Take-away, vi har mad til enhver smag, om det gælder et stjerneskud eller en Black angus burger"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>

  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include '../includes/announcement.php'; ?>
  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include '../includes/navigation.php'; ?>
  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../includes/header.php'; ?>

<div class="wrapper onlineBestilling">
    <div class="container onlineBestilling">
      <div class="row onlineBestilling">
        <div class="six columns bestilonline">
          <div class="Bestil_onlineindex">
            <h2 id="bestilonlineheader">Bestil Online</h2>
          </div>
        </div>
        <div class="two columns bestilonline">
          <a class="button button-primary bestil" href="https://cafefrederiksberg.azurewebsites.net/">Bord</a>
        </div>
        <div class="two columns bestilonline">
          <a class="button button-primary bestil" href="https://cafefrederiksberg.azurewebsites.net/">Take Away</a>
        </div>
      </div>
    </div>
  </div>


<div class="bg_dark">
  <div class="menu_kort_spacer"></div>
<div class="container">
  <div class="row">
    <div class="menu_kort">
      <h2 class="menu_kort_overskrift">Menukort</h2>

      <div class="menu_item" style="margin-top: 2rem;">
        <div class="menu_item_name">Rejecocktail</div>
        <div class="menu_item_price">45,-</div>
        <div class="menu_item_description"></div>
      </div>

      <div class="menu_item">
        <div class="menu_item_name">Rejecocktail</div>
        <div class="menu_item_price">45,-</div>
        <div class="menu_item_description">En beskrivende text til retten</div>
      </div>

      <div class="menu_item">
        <div class="menu_item_name">Rejecocktail</div>
        <div class="menu_item_price">45,-</div>
        <div class="menu_item_description"></div>
      </div>

        <p class="menu_allergener">*Gæster kan få oplysninger om allergerner ved at henvende sig til personalet</p>
        <p>Vi serverer mad dagligt kl. <b>12:00 - 14:00</b> og <b>kl. 17:00 - 20:00</b></p>
        <p><b>OBS:</b> Fredag og Lørdag er der travlt, derfor burde bord bestilles I god tid.</p>
        <p style="text-align: center">Bestil bord <a target="_blank" href="pages/booking.php"><u><b>her</b></u></a></p>
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





<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
