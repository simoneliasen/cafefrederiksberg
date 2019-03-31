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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="button" href="#">Se vores Magsin <u>her</u></a>
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

  <div class="row">
    <div class="eight columns" style="">
      <div class="kommende_events_date" style="width:20%; height:100%; position: relative; float: left;">
        Dato:
        <br>
        19 - 06 - 2019
      </div>
      <div class="kommende_events_info" style="width:80%; height:100%; float: right; position: relative;">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns" style="height: 200px;">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
  <hr style="border-color: #fff">

  <div class="row">
    <div class="eight columns" style="">
      <div class="kommende_events_date" style="width:20%; height:100%; position: relative; float: left;">
        Dato:
        <br>
        19 - 06 - 2019
      </div>
      <div class="kommende_events_info" style="width:80%; height:100%; float: right; position: relative;">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns" style="height: 200px;">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
  <hr style="border-color: #fff">

  <div class="row">
    <div class="eight columns" style="">
      <div class="kommende_events_date" style="width:20%; height:100%; position: relative; float: left;">
        Dato:
        <br>
        19 - 06 - 2019
      </div>
      <div class="kommende_events_info" style="width:80%; height:100%; float: right; position: relative;">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns" style="height: 200px;">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
  <hr style="border-color: #fff">
</div>

<div class="container">

  <!-- facebook php event implementation -->

  <?php
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

    <!-- alternativ nem løsning -->
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=683879905040205&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-like-box" data-href="https://www.facebook.com/Fredelive/" data-height="500" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>



</div>



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
