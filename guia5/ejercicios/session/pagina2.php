<?php 
    $user_email = isset($_POST['UserEmail']) ? $_POST['UserEmail'] : "";

    session_start();
    
    if(!isset($_SESSION['sesion'])) {
        $_SESSION['sesion'] = array(
            'user_name' => 'Kratos',
            'user_email' => 'ghostofsparta@gmail.com'
        );
    }

    if ($user_email == $_SESSION['sesion']['user_email']) {
        header('Location: pagina1.php?accepted=1');
    } else {
        header('Location: pagina1.php?error=1');
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
        <h1>Se ha verificado la sesion.</h1>
        <a href="pagina1.php" class='link-primary'>Ir a la otra página</a>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>