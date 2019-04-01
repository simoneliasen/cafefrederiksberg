<div class="navigationbar">

<!--Container der centrere content i navigationsmenu  -->
  <nav class="container">

    <!--Logo  -->
    <div class="logo">
    <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" width="150rem" height="auto"></a>
    </div>

<!--Navigationsmenu m. relative path fra document root (skal hedde caffrederiksberg, før den virker (ændres når den tages online)) -->
<div class="navigationmenu">
<a href="/cafefrederiksberg/pages/restaurant.php">Restaurant</a>
<a href="/cafefrederiksberg/pages/bar.php">Bar</a>
<a href="/cafefrederiksberg/pages/events.php">Events</a>
<a href="/cafefrederiksberg/pages/selskaber.php">Selskaber</a>
<a href="/cafefrederiksberg/pages/kontakt.php">Kontakt</a>
</div>
  <hr id="headerline">

  </nav>

</div>

<style>

#logo {
  margin-top: 1rem;
  margin-bottom: 0.5rem;
}

.navigationmenu {
  margin-top: 1.3rem;
  margin-bottom: 0.5rem;
}

.navigationmenu > a {
  padding-left: 3.2rem;
  font-family: "Poppins";
  text-decoration: none;
  color: #FFFFFF;
}
.navigationmenu > a:hover {
  color: #9A9A9A;
}
#headerline {
  margin: 0;
  background-color: #E2E2E2;
  color: #E2E2E2;
  border-color: #E2E2E2;
}




/*Fra external css  */
.navigationbar {
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%;
  z-index: 1;  /*puts header in front of content*/
  }
.logo {
  display: inline;
}
#logo {
  display: inline;
}
.navigationmenu {
  display: inline;
  float: right;
}

.navigationmenu > p {
  display: inline;
</style>
