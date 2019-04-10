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
<!--top knapper på siden-->
<div class="bg_dark">
  <div class="container">
   <div style="text-align:center;">
     <div style="width:80%; display: inline-block;">

        <div class="four columns">
          <div class="selskab_button">
          <a class="button button-primary bestil" href="pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
        </div>
      </div>

        <div class="four columns">
          <div class="selskab_button">
          <a class="button button-primary bestil" href="pages/selskaber/buffet.php">Buffet</a>
        </div>
      </div>

        <div class="four columns">
          <div class="selskab_button">
          <a class="button button-primary bestil" href="pages/selskaber/arrangementer.php">Arrangementer</a>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>

<!--selskabsmenu row-->

  <div class="container arrangementer">
    <div class="selskaber_wrapper">

      <div class="row">
        <div class="one-half column">
          <img src="img/Butikfront.png" width="400rem" height="auto">
        </div>

        <div class="one-half column">
          <span class="selskab_text_title">
          Café Frederiksberg udlejer lokaler til fest og andet selskab
          </span><br>
          <p style="width: 400px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>
        </div>
      </div>
    </div>
  </div>




<div class="selskab_button_section">
  <a class="button button-primary bestil" href="pages/selskaber/selskabsmenu.php"> Selskabsmenu</a>
</div>

<!--Buffet row-->
<div class="bg_dark">
  <div style="padding-top: 3rem;">
   <div class="container arrangementer">
    <div class="selskaber_wrapper">
      <div class="row">
        <div class="one-half column">
          <span class="selskab_text_title">
            En buffet for enhver smag

          </span><br>
          <p style="width: 400px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>

        </div>

        <div class="one-half column">
          <img src="img/butikfront.png" width="400rem" height="auto">

        </div>
      </div>
      <div class="selskab_button_section">
        <a class="button button-primary bestil" href="pages/selskaber/buffet.php"> Se vores Buffets</a>
      </div>
    </div>
   </div>
  </div>
 </div>


<!--Arrangementer row-->
    <div class="container arrangementer">
      <div class="selskaber_wrapper">

        <div class="row">
          <div class="one-half column">
            <img src="img/butikfront.png" width="400rem" height="auto">
          </div>

          <div class="one-half column">
            <span class="selskab_text_title">
              Arrangementer vi tilbyder

            </span><br>
            <p style="width: 400px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <br>

          </div>
        </div>
      </div>
    </div>
    <div class="selskab_button_section">
      <a class="button button-primary bestil" href="pages/selskaber/arrengementer.php"> Arrangementer</a>
    </div>


<hr>




<!--
<div class="bg_dark">
  <div class="container">
   <div class="header-centertext">
     <div>

        <div class="four columns">
          <div class="selskab_button">
          <a class="selskab_button_text" href="pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
        </div>
      </div>

        <div class="four columns">
          <div class="selskab_button">
          <a class="selskab_button_text" href="pages/selskaber/buffet.php">Buffet</a>
        </div>
      </div>

        <div class="four columns">
          <div class="selskab_button">
          <a class="selskab_button_text" href="pages/selskaber/arrangementer.php">Arrangementer</a>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="selskab_item_positions">

    <span class="selskab_text_title">
      Test tittlele
    </span><br>

    <div class="five columns">
      <div class="selskab_text_position">
       <span class="selskab_text_atttributes">
        Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Morbi tempus iaculis urna id.
        Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Non
        quam lacus suspendisse faucibus interdum. Turpis cursus in hac habitasse
        platea dictumst quisque sagittis. Pellentesque elit ullamcorper
        dignissim cras tincidunt lobortis. Eu facilisis sed odio morbi.
        Lacinia at quis risus sed vulputate odio. A erat nam at lectus.
        Pretium quam vulputate dignissim suspendisse in est ante. Neque vitae
        tempus quam pellentesque nec. Id diam vel quam elementum. Faucibus nisl
        tincidunt eget nullam. Morbi non arcu risus quis varius quam. Malesuada
        nunc vel risus commodo viverra.</span>
     </div>
   </div>

      <div class="four columns">
        <div class="selskab_img_position">
          <img src="img/Happyfish.jpg" alt="Placeholder fish" height="250px" width="300px">
        </div>
      </div>

   </div>
</div>

  <div class="selskab_button_section">
    <a class="selskab_button_text" href="pages/selskaber/selskabsmenu.php"> Selskabsmenu</a>
  </div>
<br>

<div class="bg_dark">
  <div class="container">
    <div class="four columns">
      <div class="selskab_img_position">
        <img src="img/Happyfish.jpg" alt="Placeholder fish" height="250px" width="300px">
      </div>
    </div>

   <div class="five columns">
     <span class="selskab_text_title">
       Test tittlele
     </span><br>
     <span class="selskab_text_atttributes">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
  incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan
  in nisl nisi scelerisque eu. Mauris a diam maecenas sed enim ut sem viverra.
  Molestie a iaculis at erat pellentesque adipiscing commodo elit at. Viverra
  suspendisse potenti nullam ac tortor vitae purus. Tortor vitae purus faucibus
  ornare. Duis convallis convallis tellus id interdum velit laoreet id donec.
  Netus et malesuada fames ac turpis egestas maecenas. Elit eget gravida cum
  sociis natoque penatibus. Euismod lacinia at quis risus sed vulputate odio.
  Elit eget gravida cum sociis natoque penatibus et magnis dis. Purus ut
  faucibus pulvinar elementum. Eget duis at tellus at urna condimentum mattis
  pellentesque id. Metus dictum at tempor commodo ullamcorper a lacus.
  In egestas erat imperdiet sed euismod. Luctus venenatis lectus magna
  fringilla. Viverra ipsum nunc aliquet bibendum. <span>
  </div>
 </div>
</div>
-->




<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
