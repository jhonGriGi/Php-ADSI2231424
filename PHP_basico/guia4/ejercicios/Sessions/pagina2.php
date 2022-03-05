<?php
session_start();

$password = 1234;
$UserName = isset($_POST['UserName']) ? $_POST['UserName'] : "";
$UserPassword = isset($_POST['UserPassword']) ? $_POST['UserPassword'] : "";



if(!isset($_SESSION['sesion'])) {
    $_SESSION['sesion'] = array(
        'user_name' => $UserName,
        'user_password' => $UserPassword,
        'user_tries' => 0
    );

}



if ($_SESSION['sesion']['user_password'] == "" || $_SESSION['sesion']['user_password'] != $password) {
    $_SESSION['sesion']['user_tries'] += 1;
    header("Location: pagina1.php?error=1");
}

if ($_SESSION['sesion']['user_tries'] > 2) {
    header("Location: pagina1.php?error=3");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../css/all.min.css">
    <style>
        .text-white {
            color: #fff;
            height: 50px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="text-center">Procesar</h1>
                <hr style="color: black">
                <p class="text-center">La persona llamada: <strong><?php echo $UserName ?></strong></p>
                <div class="row">
                    <div class="col-8 offset-2 text-center py-2 <?php echo $newClass?>">
                        <?php 
                            echo $_SESSION['sesion']["user_name"];
                            echo "<br>";
                            echo $_SESSION['sesion']['user_tries'];

                            if ($_SESSION['sesion']['user_password'] == $password) {
                                $_SESSION['sesion']['user_tries'] = 0;
                                echo "<br>Se loggeo correctamente";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>