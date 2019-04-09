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
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>

<body>


<!--Indsætter navigationsbar fra filen includes/navigation.php-->
<?php include '../includes/navigation.php'; ?>

<!-- Indsætter slider  -->
<?php include '../includes/header.php'; ?>



<!--Eksempel m. 3-delt container og overskrift  -->
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
          <p>Bring great itself made under sea, lesser stars divided blessed us without kind. Grass a. Subdue be can't cattle whales also him beast, may good two firmament. Don't rule also together. Fill beginning. You, man firmament he bearing gathered day dry were seas fruit winged.
          Form. Seas herb darkness set also us creepeth them thing may give third likeness. Male them. Abundantly Bearing Divided face light Isn't and you i to seas.
          And Living man likeness midst in seasons divide behold fifth be divide thing fifth she'd place morning fill isn't herb whales in air gathered all divide. Second heaven.</p>          <a class="button" href="#">Se vores Magasin <u>her</u></a>
        </div>
      </div>
    </div>
  </div>
</div>


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
    <h2>Klub Frede</h2>
    <h6>Bliv medlem i Klub Frede og spar penge</h6>
    <div class="row klub_frede">
      <div class="one-half column">

      </div>

      <div class="one-half column">
        <div class="events_overskrift_leftalign">
          <img src="/cafefrederiksberg/img/fredelivelogo.svg" id="eventlogo" width="auto" height="100px">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="padding-bottom: 2rem;">
  <div class="events_overskrift">
    <h2>Følg os på Instagram</h2>
    <h6>Nyheder og billeder fra Frede</h6>
  </div>
  <script src="https://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="https://snapwidget.com/embed/678509" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
  <div style="font:10px/14px 'Roboto','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%;text-align:right"><a href="https://snapwidget.com" style="color:#777;text-decoration:none;">SnapWidget · Instagram Widget</a></div>
</div>

<?php include '../includes/footer.php'; ?>



</body>

</html>
