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
  <div class="container buffet-menu">
    <!-- opretter række, som elementer let kan placeres i-->
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



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
