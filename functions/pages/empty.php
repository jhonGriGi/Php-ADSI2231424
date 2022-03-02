<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty Function</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">

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
                            <a class="nav-item nav-link active" href="#">Empty</a>
                            <a class="nav-item nav-link" href="./arrayFunctions.php">Array Functions</a>
                            <a class="nav-item nav-link" href="./associative.php">Array Associative</a>
                            <a class="nav-item nav-link" href="./subString.php">Substring</a>
                            <a class="nav-item nav-link" href="./getLength.php">Get Length</a>
                            <a class="nav-item nav-link" href="./explode.php">Explode</a>
                            <a class="nav-item nav-link" href="./strToUpper.php">String Upper</a>
                            <a class="nav-item nav-link" href="./nameFunctions.php">Name Functions</a>
                            <a class="nav-item nav-link" href="./inArray.php">In Array</a>
                        </div>
                    </div>
                </nav>
                </div>
                <hr>
                <h1 class="text-center">Empty Function</h1>
                <div class="col-8 offset-2">
                    <h4 class="my-3">Resultado con la funcion EMPTY():</h4> 
                    <p>La variable actual es: <strong>$variable = 5.7;</strong></p>
                    <?php
                        include '../exercises/empty.php';

                        echo emptyFunction(5.7);
                    ?>
                    <h4 class="my-3">Resultado con la funcion EMPTY():</h4>
                    <p>La variable actual es: <strong>$variable = 0;</strong></p>
                    <?php
                        echo emptyFunction(0);
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>