<?php
    /* Problema propuesto.
    Realizar una página que simule ser la de un periódico. La misma debe permitir configurar qué tipo
    de titular deseamos que aparezca al visitarla, pudiendo ser:
    Noticia política, Noticia económica o Noticia deportiva.
    Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico.
    Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el
    sitio deben aparecer los tres titulares */

    $user_name = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : "";
    $user_radio = isset($_COOKIE['user_radio']) ? $_COOKIE['user_radio'] : "";

    function printResult($user_name, $user_radio) {
        if ($user_name != "" && $user_radio != "") {
            echo "
                <div class='row text-center'>
                    <h1>Bienvenido:  $user_name </h1>
                    <h1>El titular de hoy es: $user_radio </h1>
                </div>
            ";
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
            <div class="col-md-12 mb-5">
                <h1 class="text-center">Formulario</h1>
                <hr>
                <div class="row">
                    <div class="col-6 offset-3">
                    <form action="pagina2.php" method="POST">
                        <div class="form-group mt-3">
                            <label for="exampleUserName">User Name</label>
                            <input type="text" class="form-control" id="exampleUserName" name="UserName" placeholder="Enter your username">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="radio1" value="noticiaPolitica">
                            <label class="form-check-label" for="radio1">
                                Noticia política
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="radio2" value="noticiaEconomica">
                            <label class="form-check-label" for="radio2">
                                Noticia económica
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="radio3" value="noticiaDeportiva">
                            <label class="form-check-label" for="radio3">
                                Noticia deportiva
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                    </div>
                </div>
                <?php 
                    printResult($user_name, $user_radio);
                ?>
            </div>
            
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>