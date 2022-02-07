<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Array</title>
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
                            <a class="nav-item nav-link" href="./nameFunctions.php">Name Functions</a>
                            <a class="nav-item nav-link active" href="#">In Array</a>
                        </div>
                    </div>
                </nav>
                </div>
                <h1 class="text-center">In Array</h1>
                <hr>
                <div class="col-8 offset-2">
                    <h4 class="my-3">Nombre que Si esta:</h4> 
                    <p>La nombre actual es: <strong>Kratos</strong></p>
                    <?php
                        include '../exercises/nameFunctions.php';

                        echo verifyArray('Kratos');
                    ?>
                    <h4 class="my-3">Nombre que No esta:</h4>
                    <p>La nombre actual es: <strong>Jhin</strong></p>
                    <?php
                        echo verifyArray('Jhin');
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>