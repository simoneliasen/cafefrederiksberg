<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Login</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Admin stylesheet  -->
  <link rel="stylesheet" type="text/css" href="admin.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

</head>

<body>

  <!--Tilbage til forsiden  -->
  <div class="loginbacktoindex">
    <a href="/cafefrederiksberg/index.php" id="backtofrontpage">
      <p>Tilbage til Forsiden </p>
    </a>
  </div>

  <!-- Container til indhold på siden -->
  <div class="container loginpage">

    <!--Logo  -->
    <div class="logologin">
      <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="500rem" height="auto">
    </div>

    <!--Centrere Form  -->
    <div class="formcenter">

      <!--Form  -->
      <form action="action_page.php">

        <!--Brugernavn  -->
        <div class="brugernavn">
          <label for="username"><b>Brugernavn</b></label>
          <input type="text" placeholder="Indsæt Brugernavn" name="username" required>
        </div>

        <!--Kodeord  -->
        <div class="kodeord">
          <label for="password"><b>Kodeord</b></label>
          <input type="password" placeholder="Indsæt Kodeord" name="password" required>
        </div>

        <!--Login knap  -->
        <button type="submit" id="loginknap">Login</button>

        <!--Husk mig på denne computer  -->
        <div class="huskmig">
          <input type="checkbox" checked="checked" name="remember"> Husk mig på denne computer
        </div>

    </div>

    </form>
  </div>

  </div>

</body>

</html>