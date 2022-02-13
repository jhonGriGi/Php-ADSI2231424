<?php
    $userName = isset($_POST['UserName']) ? $_POST['UserName'] : "";
    $sports = array ();
    
    if (isset($_POST['Futbol'])) {
        array_push($sports, "Futbol");
    }

    if (isset($_POST['Basket'])) {
        array_push($sports, "Basket");
    }

    if (isset($_POST['Tennis'])) {
        array_push($sports, "Tennis");
    }

    if (isset($_POST['Voley'])) {
        array_push($sports, "Voley");
    }

    function showSports($sports) {
        foreach ($sports as $value) {
            echo "<li>$value</li>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../css/all.min.css">

    <style>

    </style>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2 my-5">
                <h1 class="text-center">Procesar</h1>
                <hr>
                <div class="row text-center">
                    <p>EL nombre de usuario es: <strong><?php echo $userName ?></strong></p>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <h4>Los deportes que selecciono son:</h4>
                        <ul>
                            <?php showSports($sports) ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>