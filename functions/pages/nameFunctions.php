<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Formats</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/all.min.css">

    <style>

    </style>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="./date.php">Dates</a>
                            <a class="nav-item nav-link" href="./getTypes.php">Get Types</a>
                            <a class="nav-item nav-link" href="./issetAndUnset.php">Isset and Unset</a>
                            <a class="nav-item nav-link" href="./empty.php">Empty</a>
                            <a class="nav-item nav-link" href="./arrayFunctions.php">Array Functions</a>
                            <a class="nav-item nav-link" href="./associative.php">Array Associative</a>
                            <a class="nav-item nav-link" href="./subString.php">Substring</a>
                            <a class="nav-item nav-link" href="./getLength.php">Get Length</a>
                            <a class="nav-item nav-link" href="./explode.php">Explode</a>
                            <a class="nav-item nav-link" href="./strToUpper.php">String Upper</a>
                            <a class="nav-item nav-link active" href="#">Name Functions</a>
                            <a class="nav-item nav-link" href="./inArray.php">In Array</a>
                        </div>
                    </div>
                </nav>
                </div>
                <h1 class="text-center">Date Formats</h1>
                <hr>
                <div class="col-8 offset-2">
                    <h4 class="mt-3">Capitalize:</h4>
                    <p>El nombre es: <strong>pablo emilio escobar gaviria</strong>
                    </p>
                    <h5 class="mt-3">Resultado con ucwords():</h5>
                    <?php
                        include '../exercises/nameFunctions.php';

                        echo capitalizeName();
                    ?>

                    <h4 class="mt-3">Lower Case:</h4>
                    <p>El email es: <strong>PABLOESCOBAR@GMAIL.COM</strong>
                    </p>
                    <h5 class="mt-3">Resultado con strtolower():</h5>
                    <?php
                        echo lowerEmail();
                    ?>

                    <h4 class="mt-3">Length text:</h4>
                    <p>El nombre es: <strong>pablo emilio escobar gaviria</strong>
                    </p>
                    <h5 class="mt-3">Resultado con strlen():</h5>
                    <?php

                        echo nameLength();
                    ?>

                    <h4 class="mt-3">Last four:</h4>
                    <p>El nombre es: <strong>pablo emilio escobar gaviria</strong>
                    </p>
                    <h5 class="mt-3">Resultado con substr():</h5>
                    <?php

                        echo getLastFour();
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>