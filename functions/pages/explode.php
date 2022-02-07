<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
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
                            <a class="nav-item nav-link active" href="#">Explode</a>
                            <a class="nav-item nav-link" href="./strToUpper.php">String Upper</a>
                            <a class="nav-item nav-link" href="./nameFunctions.php">Name Functions</a>
                            <a class="nav-item nav-link" href="./inArray.php">In Array</a>
                        </div>
                    </div>
                </nav>
                </div>
                <h1 class="text-center">Explode</h1>
                <hr>
                <div class="col-8 offset-2">
                    <h4>La cadena es:</h4>
                    <p>Rosa*Juan*Pedro*Jose</p>
                    <h4>Resultado con explode():</h4>
                    <?php
                        include_once '../exercises/explode.php';

                        echo "<pre>";
                        print_r(showExplode());
                        echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>