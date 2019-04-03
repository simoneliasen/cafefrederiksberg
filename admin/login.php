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
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

</head>

<body>

<!--Background farve  -->


<!--Tilbage til forsiden  -->
  <div class="loginbacktoindex">
    <a href="/cafefrederiksberg/index.php"><p>-- Tilbage til Forsiden </p></a>
</div>





  <!-- Container til logo og login-sektion  -->
  <div class="container loginpage">
<div class="loginlogo">
  <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" width="500rem" height="auto"></a>
</div>



<div class="form">
<form action="action_page.php">
    <label for="username"><b>Brugernavn</b></label>
    <input type="text" placeholder="Indsæt Brugernavn" name="username" required>

<br>
<br>
    <label for="password"><b>Kodeord</b></label>
    <input type="password" placeholder="Indsæt Kodeord" name="password" required>

<br>
<br>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

</form>
</div>




</div>



<style>


.form {
  text-align: center;

}

.container.loginpage {
  margin-top: 5rem;
}

.loginbacktoindex {

}

.loginlogo {
  text-align: center;
}



</style>


</body>
</html>
