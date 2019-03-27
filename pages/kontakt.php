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
  <h1> her kommer der til at være en slider </h1>
</div>


  <!--Eksempel m. 3-delt container og overskrift  -->
  <div class="wrapper indholdsoversigt">
    <!--Indhold centreret i wrapper-->
    <div class="container indholdsoversigt">
      <h1> Her kommer der til at være en indholdsoversigt </h1>


      <div class="container_buttons">
        <div class="row indholdsoversigt">
          <!--Opsætter kolonner der hver fylder 3 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
          <div class="six columns">
            <div class="Bestil_online"><h2>Bestil online</h2></div>
          </div>
          <div class="two columns">
            <a class="button button-primary" href="#">Bord</a>
          </div>
          <div class="two columns">
            <a class="button button-primary" href="#">Biletter</a>
          </div>
          <div class="two columns">
            <a class="button button-primary" href="#">Take-away</a>
          </div>
        </div>
      </div>
    <!-- Kontakt info -->
      <div class="Opening_info">
        <div class="row indholdsoversigt">
          <div class="three columns">
            <div class="opening_float_left">
              <h2>Åbningstid:</h2>
                <ul class="opening_times">
                  <li><strong>Mandag:</strong>  kl. 10.00-00.00</li>
                  <li><strong>Tirsdag:</strong> kl. 10.00-00.00</li>
                  <li><strong>Onsdag:</strong>  Kl. 10.00-00.00</li>
                  <li><strong>Torsdag:</strong> Kl. 10.00-03.00</li>
                  <li><strong>Fredag:</strong>  Kl. 10.00-03.00</li>
                  <li><strong>Lørdag:</strong>  Kl. 08.00-03.00</li>
                  <li><strong>Søndag:</strong>  Kl. 08.00-00.00</li>
                </ul>
              <h2>Køkken:</h2>
              <ul class="opening_times">
                <li><strong>Hver dag:</strong>  Kl. 12.00-14.00 & 17.00-20.00</li>
              </div>
            </div>
            <div class="three columns">
              <div class="kontaktinfo_float_right">
                <h2>Find os her</h2>
                  <ul class="opening_times">
                    <li><strong>Hadsundvej 1B</strong></li>
                    <li><strong>9000 Aalborg</strong></li>
                    <li><strong>Danmark</strong></li>
                    <li><strong>(+45) 98 12 03 83</strong></li>
                    <li><strong>cafefrederiksberg@gmail.com</strong></li>
                  </ul>
                <h2>Vedrørende fest</h2>
                <ul class="opening_times">
                  <li><strong>(+45) 22 42 43 00</strong></li>
                  <li><strong>Frederiksbergselskaber@gmail.com</strong></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
