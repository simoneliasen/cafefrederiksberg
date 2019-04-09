
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
    <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" width="150rem" height="auto"></a>
    </div>

<!--Navigationsmenu(root skal  hedde caffrederiksberg, før den virker (ændres når den tages online)) -->
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

<!--Rest menu (kontakter)  -->
<a href="/cafefrederiksberg/pages/kontakt.php">Kontakt</a>
</div>

</nav>

</div>

<!-- Jquery Script that changes the color of the header on scroll (+opacity)  -->
<script>
var $nav = $('.navigationbar');
$(document).scroll(function() {
    $nav.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
});
</script>

<script>
var $dropdown = $('.dropdown-content');
$(document).scroll(function() {
    $dropdown.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
});
</script>

<style>
.dropdown-content {

  padding-right: 0;
  background-color: transparent;
}
.dropdown-content a {
  padding-left: 0.8rem;
  padding-right: 0.5rem;
  background-color: transparent;
}

</style>
