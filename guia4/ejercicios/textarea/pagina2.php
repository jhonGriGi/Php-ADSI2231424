<?php

if (isset($_POST['curriculum'])) {
    $curriculum = $_POST['curriculum'];
    $newClass = "textCurriculum";
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
        .border {
            border: 2px solid ;
        }
        .textCurriculum {
            text-align: justify;
        }
    </style>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="text-center">Contrato</h1>
                <hr style="color: black">
                <div class="row">
                    <div class="col-4 offset-4 text-center py-2 border <?php echo $newClass?>">
                        <?php echo $curriculum ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>