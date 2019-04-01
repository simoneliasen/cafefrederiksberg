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
    <h2>Frede Live</h2>
    <h6>Kommende Events</h6>
  </div>

  <div class="row events">
    <div class="eight columns">
      <div class="events_date">
        <b>Dato</b>
        <p>19 - 06 - 2019</p>
        <b>Tid</b>
        <p>19.00</p>
      </div>
      <div class="events_info">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a class="button" href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns events_img">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
  <hr style="border-color: #383838;">

  <div class="row events">
    <div class="eight columns">
      <div class="events_date">
        <b>Dato</b>
        <br>
        19 - 06 - 2019
      </div>
      <div class="events_info">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a class="button" href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns events_img">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
  <hr style="border-color: #383838;">

  <div class="row events">
    <div class="eight columns">
      <div class="events_date">
        <b>Dato</b>
        <br>
        19 - 06 - 2019
      </div>
      <div class="events_info">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a class="button" href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns events_img">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
  <hr style="border-color: #383838;">
</div>

<div class="container" style="padding-top: 100px;">
  <h2>Følg os på Instagram</h2>
  <script src="https://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="https://snapwidget.com/embed/678509" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
  <div style="font:10px/14px 'Roboto','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%;text-align:right"><a href="https://snapwidget.com" style="color:#777;text-decoration:none;">SnapWidget · Instagram Widget</a></div>
</div>
  <?php

//   require_once '../vendor/autoload.php';
//
//   $fb = new \Facebook\Facebook([
//   'app_id' => '2107776996179147',
//   'app_secret' => '364cdeeee1650b910466a0e4d8eac477',
//   'default_graph_version' => 'v5.7',
//   //'default_access_token' => '{access-token}', // optional
// ]);
//
// # login.php
// $fb = new Facebook\Facebook([/* . . . */]);
//
// $helper = $fb->getRedirectLoginHelper();
// $permissions = ['email', 'user_likes']; // optional
// $loginUrl = $helper->getLoginUrl('http://{your-website}/login-callback.php', $permissions);
//
// echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

// $pageid='274122705947707';
//
// $MEevents = $facebook->api('/'.$pageid.'/events?access_token='.$app_access_token.'&fields=id,name,from,start_time,location,end_time&limit=8');
// echo '<div align="center" style="border: 0px solid; width: 100%;">';
// foreach ($MEevents as $key=>$value) {
//       $i=1;
//       foreach ($value as $fkey=>$fvalue) {
//       if($fvalue[id]==h){
//       }else{
//       $i++;
//       $whofrom = $fvalue[from];
//       $whofromname = $whofrom[name];
//       $whofrompic = $whofrom[id];
//
//       echo '<div title="'.$fvalue[name].'" style="vertical-align: top; border: 1px inset; width: 700px; min-height: 80px; margin: 2px;">';
//       echo '<div id=""></div>';
//       echo '<div style="margin: 4px; padding: 3px; text-align: left;">';
//       echo '<img src="https://graph.facebook.com/'.$fvalue[id].'/picture" style="float: left; clear: left; margin: 5px;">&nbsp;';
//       echo '<a href="https://www.facebook.com/event.php?eid='.$fvalue[id].'" target="_blank">'.$fvalue[name].'</a><br />';
//       echo 'Location: '.$fvalue[location].'<br />';
//       echo 'Starts '.nicetime($fvalue[start_time]).' - Ends '.nicetime($fvalue[end_time]).'<br />';
//       echo '</div>';
//       echo '</div>';
//           }
//
//       }
//   }
//   echo '</div>';
    ?>





<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
