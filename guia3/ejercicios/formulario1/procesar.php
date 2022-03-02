<?php
$name = isset($_POST["UserName"]) ? $_POST["UserName"] : "";
$email = isset($_POST["UserEmail"]) ? $_POST["UserEmail"] : "";
$phone = isset($_POST["UserPhone"]) ? $_POST["UserPhone"] : "";
$city = isset($_POST["UserCity"]) ? $_POST["UserCity"] : "";
$age = isset($_POST["UserAge"]) ? $_POST["UserAge"] : "";
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
        h1 {
            color: #000;
        }

        * {
            color: #FFF;
        }

        div {
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="text-center">Respuesta</h1>
                <hr style="color: black">
                <?php
                    $age > 18 ? include "./respuestaAfirmativa.php" : include "./respuestaNegativa.php";
                ?>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>