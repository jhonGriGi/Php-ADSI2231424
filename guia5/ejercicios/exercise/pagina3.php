<?php 
    session_start();

    $user_email = isset($_SESSION['sesion']['user_email']) ? $_SESSION['sesion']['user_email'] : "";
    $user_name = isset($_SESSION['sesion']['user_name']) ? $_SESSION['sesion']['user_name'] : "";
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
        <div class="row text-center">
            <h1>Se ha verificado la sesion.</h1>
            <?php 
                if (isset($user_name)) {
                    echo "
                        <h1>Bienvenido $user_name</h1>
                        <p class='text-info'>EL correo es: $user_email</p>
                    ";
                }
            ?>
            <a href="pagina1.php" class='link-primary'>Ir a la otra página</a>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>