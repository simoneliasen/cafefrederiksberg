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




    <div class="container">
        <h2 class="header-centertext">Sammensæt din egen menu<h2>
                <hr>
    </div>

    <div class="selskab_menu_overskrift">
        <h3 class="header-centertext"> Forretter </h3><br>
    </div>

    <div class="bg_dark">
        <div class="container">
            <!-- Her tilføjes hver enkelt ret samt pris -->
            <div class="selskab_menu_item">
                <div class="selskab_menu_item_name">
                    <span class="selskab_menu_item_fontstyle">Klar suppe</span>
                    <p>Med boller og flütes</p>
                </div>
                <div class="selskab_menu_item_price">
                    <span class="selskab_menu_item_fontstyle">- per couv. kr. 52,-</span>
                </div>
            </div>

            <div class="selskab_menu_item">
                <div class="selskab_menu_item_name">
                    <span class="selskab_menu_item_fontstyle">Klar suppe</span>
                    <p>Med boller og flütes</p>
                </div>
                <div class="selskab_menu_item_price">
                    <span class="selskab_menu_item_fontstyle">- per couv. kr. 52,-</span>
                </div>
            </div>

        </div>
    </div>
    <div class="selskab_menu_overskrift">
        <h3 class="header-centertext"> Hovedretter </h3><br>
    </div>
    <div class="bg_dark">
        <div class="container">
            <div class="selskab_menu_item">

                <div class="selskab_menu_item_name">
                    <span class="selskab_menu_item_fontstyle">Klar suppe</span>
                    <p>Med boller og flütes</p>
                </div>

                <div class="selskab_menu_item_price">
                    <span class="selskab_menu_item_fontstyle">- per couv. kr. 52,-</span>
                </div>

            </div>
        </div>
    </div>
    <?php
    include '../../includes/footer.php'; ?>
</body>

</html> 