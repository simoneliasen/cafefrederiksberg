<style>

@media (max-width: 550px){
  .header_bg_img{
    margin-top: 25px;
  }
 }

.slider {
  height: 130px;
  width: 680px;
  overflow: visible;
  position: relative;
}

.mask {
  overflow: hidden;
  height: 130px;
}

.slider ul {
  margin: 0;
  padding: 0;
  position: relative;
}

.slider li {
  width: 680px;
  height: 320px;
  position: absolute;
  top: -325px;
  list-style: none;
}

.header_text h1{
  text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
}

.slider li.anim1 { animation: cycle 15s linear infinite; }
.slider li.anim2 { animation: cycle2 15s linear infinite; }
.slider li.anim3 { animation: cycle3 15s linear infinite; }
.slider li.anim4 { animation: cycle4 15s linear infinite; }
.slider li.anim5 { animation: cycle5 15s linear infinite; }
.slider:hover li { animation-play-state: paused; }

@keyframes cycle {
  0%  { top: 0px;}
  4%  { top: 0px; }
  16% { top: 0px; opacity: 1; z-index: 0; }
  20% { top: 325px; opacity: 0; z-index: 0; }
  21% { top: -325px; opacity: 0; z-index: -1; }
  50% { top: -325px; opacity: 0; z-index: -1; }
  92% { top: -325px; opacity: 0; z-index: 0; }
  96% { top: -325px; opacity: 0; }
  100%{ top: 0px; opacity: 1; }
}

@keyframes cycle2 {
  0%  {top: -325px; opacity: 0; }
  16% { top: -325px; opacity: 0; }
  20% { top: 0px; opacity: 1; }
  24% { top: 0px; opacity: 1; }
  36% { top: 0px; opacity: 1; z-index: 0; }
  40% { top: 325px; opacity: 0; z-index: 0;}
  41% { top: -325px; opacity: 0; z-index: -1; }
  100%{ top: -325px; opacity: 0; z-index: -1; }
}

@keyframes cycle3 {
  0%  { top: -325px; opacity: 0; }
  36% { top: -325px; opacity: 0; }
  40% { top: 0px; opacity: 1; }
  44% { top: 0px; opacity: 1; }
  56% { top: 0px; opacity: 1; z-index: 0; }
  60% { top: 325px; opacity: 0; z-index: 0; }
  61% { top: -325px; opacity: 0; z-index: -1; }
  100%{ top: -325px; opacity: 0; z-index: -1; }
}

@keyframes cycle4 {
  0%  { top: -325px; opacity: 0; }
  56% {top: -325px; opacity: 0; }
  60% { top: 0px; opacity: 1; }
  64% { top: 0px; opacity: 1; }
  76% { top: 0px; opacity: 1; z-index: 0; }
  80% { top: 325px; opacity: 0; z-index: 0; }
  81% { top: -325px; opacity: 0; z-index: -1; }
  100%{top: -325px; opacity: 0; z-index: -1 }
}

@keyframes cycle5 {
  0% { top: -325px; opacity: 0; }
  76% { top: -325px; opacity: 0;}
  80% { top: 0px; opacity: 1; }
  84% { top: 0px; opacity: 1; }
  96% { top: 0px; opacity: 1; z-index: 0; }
  100% { top: 325px; opacity: 0; z-index: 0;}
}

* {box-sizing:border-box}

/* Slideshow container */1
.slideshow-container {
  height: 130px;
  width: 680px;
  position: absolute;
  margin: auto;
}

.mySlides img {
  object-fit: cover;
  width: 100%;
  height: 90vh;
  background-size: cover;
  position: relative;
  overflow: hidden;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

</style>
<base href="https://localhost/cafefrederiksberg/index.php">
<?php

//Opretter forbindelse manelt kontra include, da de ellers er duplikeret i main-content
$db = mysqli_connect('localhost','root','','admin');
if(!$db){
  die("Cannot connect to the database" . mysqli_connect_error());
}
mysqli_set_charset($db,"utf8");

$query ="SELECT type FROM header WHERE id='1'";
$results = mysqli_query($db, $query);
$header_choice = mysqli_fetch_assoc($results);

if($header_choice['type'] == "video_choice"){
  $query = "SELECT filename FROM header WHERE type ='video'";
  $results = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($results);
  ?>

  <div class="header_bg_img">
    <video autoplay muted loop playsinline height="90vh">
      <source src="video/<?= $row['filename'] ?>" type="video/mp4">
    </video>
    <div class="header_text">
      <h1 class="test_text">Aalborgs Hyggeligste</h1>
      <div class="slider">
        <div class="mask">
          <ul>
            <li class="anim1">
              <div class="quote"><h1>Live-Spillested</h1></div>
            </li>
            <li class="anim2">
              <div class="quote"><h1>Restaurant</h1></div>
            </li>
            <li class="anim3">
              <div class="quote"><h1>Værtshus</h1></div>
            </li>
            <li class="anim4">
              <div class="quote"><h1>Festlokaler</h1></div>
            </li>
            <li class="anim5">
              <div class="quote"><h1>Stemning</h1></div>
            </li>
          </ul>
        </div>
      </div>
      <div style="text-shadow: 0px 0px 18px rgba(0, 0, 0, 0.7);">
      <p style="font-weight: 600;">Take-away, billetter og bordbooking:</p>
      <a class="button" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Bestil online</a>
      </div>
    </div>
    <video autoplay playsinline muted loop src="/video/<?= $row['filename'] ?>" height="90vh"></video>
  </div>
  <?php }else{
    $query = "SELECT filename FROM header WHERE type ='billede'";
    $results = mysqli_query($db, $query);
    ?>

    <!-- Slideshow container -->
    <div class="header_bg_img">

      <!-- Full-width images with number and caption text -->
      <?php while($row = mysqli_fetch_row($results)):?>
      <div class="mySlides fade">
        <img src="header_slide/<?= $row[0] ?>" style="width:100%">
      </div>
      <?php endwhile ?>

      <div class="header_text">
        <h1>Aalborgs Hyggeligste</h1>
        <div class="slider">
          <div class="mask">
            <ul>
              <li class="anim1">
                <div class="quote"><h1>Live-Spillested</h1></div>
              </li>
              <li class="anim2">
                <div class="quote"><h1>Restaurant</h1></div>
              </li>
              <li class="anim3">
                <div class="quote"><h1>Værtshus</h1></div>
              </li>
              <li class="anim4">
                <div class="quote"><h1>Festlokaler</h1></div>
              </li>
              <li class="anim5">
                <div class="quote"><h1>Stemning</h1></div>
              </li>
            </ul>
          </div>
          <div style="text-shadow: 0px 0px 18px rgba(0, 0, 0, 0.7);">
          <p style="font-weight: 600;">Take-away, billetter og bordbooking:</p>
          <a class="button" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Bestil online</a>
          </div>
        </div>
      </div>

    </div>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
    </script>

<?php }; ?>

<?php mysqli_close($db); ?>
