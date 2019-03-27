<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Side titel  -->
    <title>Café Frederiksberg</title>
    <!--Standard stylesheet  -->
    <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
    <!-- Skeleton stylesheet  -->
    <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
    <!-- Normalize stylesheet  -->
    <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
    <!-- Includer Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>


    <!--Indsætter navigationsbar fra filen includes/navigation.php-->
    <?php include '../../includes/navigation.php'; ?>

    <!-- Indsætter slider  -->
    <div class="content slider">
        <h1 class="header-centertext"> her kommer der til at være en slider </h1><br>
    </div>
    </div>


    <!--Eksempel m. 3-delt container og overskrift  -->
    <div class="wrapper indholdsoversigt">
        <!--Indhold centreret i wrapper-->
        <div class="container indholdsoversigt">
            <h2 class="header-centertext">Sammensæt din egen menu<h2>
                    <hr>
                    <h2 class="header-centertext"> Forretter </h2><br>
                    <!-- opretter række, som elementer let kan placeres i-->
                    <div class="row indholdsoversigt">
                        <!--Opsætter kolonner der hver fylder 3 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
                        <div class="one columns"></div>
                        <div class="seven columns">
                            <h5> Klar suppe</h5>
                            <p>Med boller og flütes</p>
                            <h5>*Flødegeleret aspargessuppe</h5>
                            <p>Med kødboller og flutes<p>

                        </div>
                        <div class="four columns">
                            <h5>- per couv. kr. 52,-</h5><br><br>
                            <h5>- per couv. kr. 52,-</h5>
                        </div>


                    </div>
        </div>
    </div>



    <!--Indrag footer fra filen includes/footer.php-->
    <?php include '../../includes/footer.php'; ?>



</body>

</html> 