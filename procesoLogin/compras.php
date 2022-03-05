<?php

require_once "./functions/sesion.php";

$errorCode = isset($_GET['error']) ? $_GET['error'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-8 col-md-4">
                <div class="p-3 rounded-lg mt-4 shadow">
                    <a href="main.php" class="me-auto d-block">Inicio</a>
                    <a href="perfil.php" class="ms-auto d-block">Perfil</a>
                    <a href="cerrar_sesion.php" class="ms-auto d-block">Cerrar Sesion</a>
                    La cantidad de compras de <?php echo $_SESSION['name']; ?> es <?php echo isset($_COOKIE['compras']) ? $_COOKIE['compras'] : 0; ?>
                    <div class="p-3 rounded mt-4 border">
                        <form action="functions/function-compras.php" method="POST">
                            <input type="text" name="userBuys" placeholder="Ingresa la cantidad de compras" class="form-control">
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary " value="Enviar">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <?php if (isset($errorCode)) { ?>
                        <div class="p-2 rounded mt-4 border">
                            <p class="text-danger">
                                <?php
                                if ($errorCode == 1) {
                                    echo "Error al actualizar las compras, intentalo mas tarde";
                                }
                                ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>