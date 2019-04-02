
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
<!--Line to sepperate content  -->
<hr id="headerline">

</nav>

</div>


<style>
.navigationbar {
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%;
  z-index: 1;  /*puts header in front of content*/
  background: transparent;
  }
.logo {
  display: inline;
}
#logo {
  margin-top: 1rem;
  margin-bottom: 0.5rem;
  display: inline;
}
.navigationmenu {
  margin-top: 1.3rem;
  margin-bottom: 0.5rem;
  display: inline;
  float: right;
}
.navigationmenu > p {
  display: inline;
}
.navigationmenu > a, .dropdown a {
  padding-left: 3.2rem;
  font-family: "Poppins";
  text-decoration: none;
  color: #FFFFFF;
}
.navigationmenu > a:hover, .dropdown a:hover {
  color: #9A9A9A;
}
#headerline {
  margin: 0;
  border-color: white;
}

/* CSS for dropdown funktion */
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 130px;
  padding: 12px 16px;
  z-index: 1;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<!-- Jquery Script that changes the color of the header on scroll  -->
<script>
var $nav = $('.navigationbar');
$(document).scroll(function() {
    $nav.css({background: $(this).scrollTop() > 100? "black":"transparent"});
});
</script>
