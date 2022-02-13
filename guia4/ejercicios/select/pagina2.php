<?php
$userName = isset($_POST["UserName"]) ? $_POST["UserName"] : "";
$salary = isset($_POST["UserSalary"]) ? $_POST["UserSalary"] : "";

if ($salary == ">3000") {
    $newClass = "bg-danger text-white";
    $answer = "<h4>La persona debe pagar impuestos</h4>";
} else {
    $newClass = "bg-success text-white";
    $answer = "<h4>La persona no debe pagar impuestos</h4>";
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
                <p class="text-center">La persona llamada: <strong><?php echo $userName ?></strong></p>
                <div class="row">
                    <div class="col-8 offset-2 text-center py-2 <?php echo $newClass?>">
                        <?php echo $answer ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>