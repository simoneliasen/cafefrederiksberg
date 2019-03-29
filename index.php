<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>

  <!--Stylesheets  -->
  <link rel="stylesheet" type="text/css" href="css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>

  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include 'includes/navigation.php'; ?>

  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include 'includes/header.php'; ?>

  <!-- Wrapper til onlineBestilling -->
  <div class="wrapper onlineBestilling">
    <!--Indhold centreret i wrapper-->
    <div class="container onlineBestilling">

      <div class="row indholdsoversigt">
        <div class="six columns">
          <div class="Bestil_onlineindex">
            <h2 id ="bestilonlineheader">Bestil online:</h2>
          </div>
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




  <!-- Wrapper til introHistorie -->
  <div class="wrapper introHistorie">
    <!--Indhold centreret i wrapper-->
    <div class="container introHistorie">

      <div class="six columns introHistorie">
        <h2> Café Frederiksberg </h2>
        <h3> Siden år 1900</h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis neque in nunc varius fringilla.
          Morbi bibendum nunc ut posuere tempor. Donec sit amet elementum purus. Maecenas eleifend nec dolor vitae condimentum.
          Proin vel mauris sagittis.</p>
      </div>

      <div class="six columns">
        <img src="img/Butikfront.png" id="butikfront">
      </div>

    </div>
  </div>




  <!-- Wrapper til indholdsoversigt -->
  <div class="wrapper indholdsoversigt">
    <!--Indhold centreret i wrapper-->
    <div class="container indholdsoversigt">

      <!-- opretter række, som elementer let kan placeres i-->
      <div class="row indholdsoversigt">
        <!--Opsætter kolonner der hver fylder 3 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
        <div class="three columns">
          <h2>RESTAURANT</h2>
        </div>
        <div class="three columns">
          <h2>BAR</h2>
        </div>
        <div class="three columns">
          <h2>EVENTS</h2>
        </div>
        <div class="three columns">
          <h2>SELSKABER</h2>
        </div>
      </div>

    </div>
  </div>



  <div class="bg_dark">
    <div class="container">
      <div class="row">
        <div class="one-half column frede_live_katalog">

          <a href="#">
            <div class="frede_live_katalog_img">
            </div>
          </a>

        </div>
        <div class="one-half column frede_live_katalog_text">

          <div class="frede_live_katalog_text_container">
            <h2>Frede Live</h2>
            <h6>Livemusik og events</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="button" href="#">Se vores Magsin <u>her</u></a>
          </div>

        </div>
      </div>
    </div>
  </div>



    <!-- Wrapper til kommendeEvents -->
    <div class="wrapper kommendeEvents">
      <!--Indhold centreret i wrapper-->
      <div class="container kommendeEvents">
        <h1><br> Her kommer der til at være  kommende events </h1>
      </div>
    </div>



    <!--Google maps (ikke centreret, da den skal have full width)  -->
    <div class="googleMaps">
      <img src="img/Mapsplaceholder.png">
    </div>




    <!--Inddrager footer fra "includes/footer.php"-->
    <?php include 'includes/footer.php'; ?>


</body>

</html>