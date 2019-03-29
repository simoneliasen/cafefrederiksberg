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
      <h2 id "bestilonline">Bestil online</h2>
      <button>Biletter </button>
      <button>Klub Frede </button>
      <button>Take away </button>
    </div>
  </div>




  <!-- Wrapper til introHistorie -->
  <div class="wrapper introHistorie">
    <!--Indhold centreret i wrapper-->
    <div class="container introHistorie">
      <div class="six columns">
        <h2> Historien om Café Frederiksberg </h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis neque in nunc varius fringilla.
          Morbi bibendum nunc ut posuere tempor. Donec sit amet elementum purus. Maecenas eleifend nec dolor vitae condimentum.
          Proin vel mauris sagittis.</p>
      </div>
      <div class="six columns">
        <img src="img/Butikfront.png">
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



  <!-- Wrapper til katalog -->
  <div class="wrapper katalog">
    <!--Indhold centreret i wrapper-->
    <div class="container katalog">
      <!--Div til katalog  -->
      <div class="six columns katalog">
        <!--Midlertidig  -->
        <img src="img/katalog.png" width="50%" height="auto">
      </div>
      <!--Div til tekst  -->
      <div class="six columns katalogtekst">
        <h2>Katalog</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis neque in nunc varius fringilla.
          Morbi bibendum nunc ut posuere tempor. Donec sit amet elementum purus. Maecenas eleifend nec dolor vitae condimentum.
          Proin vel mauris sagittis, volutpat est at, gravida enim. Etiam mi quam, aliquet eget sodales sed, vestibulum ac nibh.
          Mauris elementum, quam in finibus vehicula, tellus nunc tempus urna, ac gravida arcu est id urna.

          Cras a sagittis ligula. Maecenas placerat quis tellus vitae ullamcorper.
          Aenean id cursus urna. Pellentesque aliquet dictum diam, vel mattis nisi sagittis eget.</p>
      </div>
  </div>



  <!-- Wrapper til kommendeEvents -->
  <div class="wrapper kommendeEvents">
    <!--Indhold centreret i wrapper-->
    <div class="container kommendeEvents">
      <h1><br> Her kommer der til at være en kommende events </h1>
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
