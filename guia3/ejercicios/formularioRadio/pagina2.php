<?php
    $userName = isset($_POST['UserName']) ? $_POST['UserName'] : "";
    $userID = isset($_POST['UserID']) ? $_POST['UserID'] : "";
    $userEmail = isset($_POST['UserEmail']) ? $_POST['UserEmail'] : "";
    $userPhone = isset($_POST['UserPhone']) ? $_POST['UserPhone'] : "";

    if (isset($_POST['radio'])) {
        if ($_POST['radio'] == 'sinEstudios') {
            $userAnswer = "<strong class='text-primary'>Sin estudios </strong>";
        } else if ($_POST['radio'] == 'estudiosPrimarios') {
            $userAnswer = "<strong class='text-success'>Estudios Primarios </strong>";
        } else if ($_POST['radio'] == 'estudiosSecundarios') {
            $userAnswer = "<strong class='text-warning'>Estudios secundarios </strong>";
        }
    } else {
        $userAnswer = "<p class='text-danger'>Seleccione una opcion</p>";
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
                <div class="row">
                    <p>EL nombre de usuario es: <strong><?php echo $userName ?></strong></p>
                </div>
                <div class="row">
                    <p>EL documento del usuario es: <strong><?php echo $userID ?></strong></p>
                </div>
                <div class="row">
                    <p>EL numero telefonico del usuario es: <strong><?php echo $userPhone ?></strong></p>
                </div>
                <div class="row">
                    <p>EL correo electronico del usuario es: <strong><?php echo $userEmail ?></strong></p>
                </div>
                <div class="row">
                    <p>Los estudios del usuario es: <?php echo $userAnswer ?></p>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>