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
<div class="wrapper buffet_menu">
  <!--Indhold centreret i wrapper-->
  <div class="container buffet_menu">
    <h1> Her kommer der til at være en indholdsoversigt </h1>
    <!-- opretter række, som elementer let kan placeres i-->
    <div class="one column">
        <a class="button button-primary" href="#">Buffet 1</a>
    </div>
    <div class="one column">
        <a class="button button-primary" href="#">Buffet 2</a>
    </div>
    <div class="one column">
        <a class="button button-primary" href="#">Buffet 3</a>
    </div>
    <div class="one column">
        <a class="button button-primary" href="#">Buffet 4</a>
    </div>
    <div class="one column">
        <a class="button button-primary" href="#">USA buffet</a>
    </div>
    <div class="one column">
        <a class="button button-primary" href="#">Øko buffet</a>
    </div>
    <div class="one column">
        <a class="button button-primary" href="#">Italiensk buffet</a>
    </div>
  </div>
</div>



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
