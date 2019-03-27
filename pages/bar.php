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
  </div>


  <!--Eksempel m. 3-delt container og overskrift  -->
  <div class="wrapper indholdsoversigt">
    <!--Indhold centreret i wrapper-->
    <div class="container indholdsoversigt">
      <h1> Her kommer der til at være en indholdsoversigt </h1>
      <!-- opretter række, som elementer let kan placeres i-->
      <div class="row indholdsoversigt">
        <!--Opsætter kolonner der hver fylder 3 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
        <div class="one-half column">
          <h2 id="center_bar">ØL & VAND</h2>
          <div id="float_bar_left">
            <ul>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
            </ul>
          </div>
          <div id="float_bar_right">
            <ul>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
            </ul>
          </div>
        </div>
        <div class="one-half column">
          <h2 id="center_bar">VARME DRIKKE</h2>
          <div id="float_bar_left">
            <ul>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
              <li><strong>FYRAFTENSØL</strong> (hverdage kl. 16.00 - 18.00) <br>nisl vel pretium lectus quam id leo in
                vitae turpis massa sed</li>
            </ul>
          </div>
          <div id="float_bar_right">
            <ul>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
              <li><i>13,-</i></li>
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