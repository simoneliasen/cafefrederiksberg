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
<div class="loginbackground">


  <div class="loginbacktoindex">
    <p>-- Tilbage til Forsiden </p>
</div>


    <div class="loginform">


  <!--Logo  -->
<div class="loginlogo">
  <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" width="500rem" height="auto"></a>
</div>

<form action="action_page.php">
  <div class="imgcontainer">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>






</div>
</div>



<style>




.loginform {
  margin-top: 10rem;
}

.loginbacktoindex {
  float: left;
}

.loginlogo {
  text-align: center;
}

</style>


</body>
</html>