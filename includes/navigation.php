
<!--Henter Jquery Script via CDN  -->
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>

<!--main navigationsbar  -->
<div class="navigationbar">
<!--Container der centrere content i navigationsmenu  -->
  <nav class="container">

<!--Logo  -->
<div class="logo">
  <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
</div>

<!-- Menu  -->
<div class="navigationmenu">
<a href="/cafefrederiksberg/pages/restaurant.php">Restaurant</a>
<a href="/cafefrederiksberg/pages/bar.php">Bar</a>
<a href="/cafefrederiksberg/pages/events.php">Events</a>

<!--Selskaber dropdown  -->
<div class="dropdown">
  <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber</a>
  <div class="dropdown-content">
  <a href="/cafefrederiksberg/pages/selskaber/buffet.php">Buffet</a>
  <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php">Arrangementer</a>
  <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
  </div>
</div>

<!--Om os dropdown  -->
<div class="dropdown">
  <a href="/cafefrederiksberg/pages/tidslinje.php">Om os</a>
  <div class="dropdown-content">
  <a href="/cafefrederiksberg/pages/kontakt.php">Kontakt</a>
  </div>
</div>
</div>
</nav>
</div>

<!-- Jquery Script that changes the color of the header on scroll (+opacity)  -->
<script>
var $nav = $('.navigationbar');
$(document).scroll(function() {
    $nav.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
});
// Does the same as above, just for The dropdown menu
var $dropdown = $('.dropdown-content');
$(document).scroll(function() {
    $dropdown.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
});
</script>
