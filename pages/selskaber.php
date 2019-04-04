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

<?php include '../includes/header.php'; ?>


<div class="bg_dark">
  <div class="container">
   <div class="header-centertext">
     <div class="selskab_button_position">

        <div class="four columns">
          <div class="selskab_button">
          <span class="selskab_button_text">Selskabsmenu</span>
        </div>
      </div>

        <div class="four columns">
          <div class="selskab_button">
          <span class="selskab_button_text">Buffets</span>
        </div>
      </div>

        <div class="four columns">
          <div class="selskab_button">
          <span class="selskab_button_text">Arrangementer</span>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <div>
    <div class="six columns">
      <p> TEST </p>
    </div>
  </div>
  
  <div>
    <div class="six columns">
      <img src="img/Happyfish.jpg" alt="Placeholder fish" height="150px" width="100px">
    </div>
  </div>

</div>






<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
