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


<!--Eksempel m. 3-delt container og overskrift  -->
<div class="wrapper buffet-menu">
  <!--Indhold centreret i wrapper-->
  <div class="container buffet-linje">
    <!-- opretter række, som elementer let kan placeres i-->
      <div class="row menulinje_buffet">
        <div class="twelve columns">
          <div class="buffet-menulinje">
          <ul>
            <li>Buffet 1</li>
            <li>Buffet 2</li>
            <li>Buffet 3</li>
            <li>Buffet 4</li>
            <li>USA buffet</li>
            <li>Italiensk Buffet</li>
            <li>Øko buffet</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container buffet-menuer">
    <div class="row buffet_1">
      <div class="six columns">
        <h2>Buffet 1</h2>
          <div class="buffet_liste">
            <ul>
              <li>Hvide sild med karrysalat</li>
              <li>Pålægsfad med 3 slags pålæg</li>
              <li>Lun glaseret skinke</li>
              <li>Grønne salater med 2 slags dressing</li>
              <li>Soltørrede tomater, oliven, marinerede hvidløg og Croutons</li>
              <li>Lun leverpostej med bacon og champignon</li>
              <li>Kyllingebryst med agurkesalat</li>
              <li>Pastasalat</li>
              <li>Frikadeller med flødekartofler</li>
              <li>Osteanretning med druer og frugt</li>
              <li>Brød og smør</li>
            </ul>
          </div>
      </div>
      <div class="six columns">
        <div class="buffet_placeholder_img_right">
        </div>
      </div>
    </div>
    <div class="row buffet_2">
      <div class="six columns">
        <div class="buffet_placeholder_img_left">
        </div>
      </div>
      <div class="six columns">
        <h2>Buffet 2</h2>
          <div class="buffet_liste">
            <ul>
              <li>Laksefad med hummerdressing, rejer, asparges og kaviar</li>
              <li>Lune mørbradbøffer med grilltomat og champignon a la creme</li>
              <li>Leverpostej med bacon og svampe.</li>
              <li>Oksefilet med flødekartofler</li>
              <li>Grønne salater med 2 slags dressing</li>
              <li>Kylling med olivenstegte kartofler, coleslaw salat, pesto, oliven, hvidløg, soltørrede tomater og croutons</li>
              <li>Pastasalat</li>
              <li>Osteanretning med druer og frugt</li>
              <li>Brød og smør</li>
            </ul>
          </div>
      </div>
    </div>
  </div>
</div>



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
