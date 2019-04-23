<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Live events udgør en stor del af Café Frederiksberg, vi prøver at holde de hyggeligste forsamlinger i Aalborg, kom blandt andet forbi og oplev vores ugentlige torsdags-jam. Alt dette og mere med Frede Live"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>



  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include '../includes/announcement.php'; ?>
  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include '../includes/navigation.php'; ?>
  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../includes/header.php'; ?>

  <?php
  //Opretter forbindelse via config.php, og tjekker om du er logget ind via session.php
  $connection = mysqli_connect('localhost','root','','admin');
  if(!$connection){
    die("Cannot connect to the database" . mysqli_connect_error());
  }

  // Tager data fra katalog table
  $query ="SELECT * FROM katalog";
  $results = mysqli_query($connection,$query);
  if(!$results){
    die("could not query the database" .mysqli_error());
  }
  
  $row = mysqli_fetch_row($results);
  ?>

<div class="bg_dark">
  <div class="container">
    <div class="row">
      <div class="one-half column frede_live_katalog">
        <a rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[1]; ?>" target="_blank">
          <div class="frede_live_katalog_img">
          </div>
        </a>
      </div>
      <div class="one-half column frede_live_katalog_text">
        <div class="frede_live_katalog_text_container">
          <h2><?php echo $row[2]; ?></h2>
          <h6><?php echo $row[3]; ?></h6>
          <p><?php echo $row[4]; ?></p>
          <a class="button" rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[1]; ?>" target="_blank">Se vores Magasin <u>her</u></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  mysqli_close($connection);
  ?>

<div class="container">
  <div class="events_overskrift">
<!--Overskrift logo  -->
    <div class="events_overskrift_leftalign">
      <img src="/cafefrederiksberg/img/fredelivelogo.svg" id="eventlogo" width="60rem" height="auto">
    </div>
<!-- Overskrift tekst  -->
    <div class="events_overskrift_rightalign">
      <h2>Frede Live</h2>
      <h6>Kommende Events</h6>
    </div>
  </div>
<div class='sk-fb-event' data-embed-id='22281'></div><script src='https://www.sociablekit.com/app/embed/facebook-events/widget.js'></script>
</div>

<div class="bg_dark">
  <div class="container">
    <div class="row">

      <div class="one-half column frede_live_katalog_text">
        <div class="frede_live_katalog_text_container">
          <h2>Klub Frede</h2>
          <h6>Bliv medlem og spar penge</h6>
          <p> </p>
          <a class="button" href="https://publizr.com/citygraphic/fredelivemusikmagasin-nr10-2019web?html=true&fbclid=IwAR0FNrTprOacjXPfp2C0WAxVmpEGbFYg4KkYu3W5MllwcCIZcFgvHJA7ss8#/0/" target="_blank">Se vores Magasin <u>her</u></a>
        </div>
      </div>


      <div class="one-half column frede_live_katalog">
        <a href="https://publizr.com/citygraphic/fredelivemusikmagasin-nr10-2019web?html=true&fbclid=IwAR0FNrTprOacjXPfp2C0WAxVmpEGbFYg4KkYu3W5MllwcCIZcFgvHJA7ss8#/0/" target="_blank">
          <div class="frede_live_katalog_img">
          </div>
        </a>
      </div>


    </div>
  </div>
</div>

<div class="container" style="padding-bottom: 2rem;">
  <div class="events_overskrift">
    <h2>Find os på Instagram</h2>
    <h6>Nyheder og billeder fra Frede</h6>
  </div>
  <script src="https://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="https://snapwidget.com/embed/678509" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
  <div style="font:10px/14px 'Roboto','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%;text-align:right"><a href="https://snapwidget.com" style="color:#777;text-decoration:none;">SnapWidget · Instagram Widget</a></div>
</div>

<?php include '../includes/footer.php'; ?>



</body>

</html>
