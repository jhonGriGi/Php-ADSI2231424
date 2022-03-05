<?php
    $errorCode = isset($_GET["error"]) ? $_GET["error"] : ""; 
    

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
            <div class="col-md-8 offset-2 my-5">
                <h1 class="text-center">Formulario</h1>
                <hr>
                <div class="row">
                    <div class="col-6 offset-3">
                    <form action="pagina2.php" method="POST">
                        <div class="form-group mt-3">
                            <label for="exampleUserName">User Name</label>
                            <input type="text" class="form-control" id="exampleUserName" name="UserName" placeholder="Enter your username">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleUserName">User Password</label>
                            <input type="password" class="form-control" id="exampleUserName" name="UserPassword" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>

                        <?php 
                        if ($errorCode == 1) {
                            echo "<h1>Incorrect Password </h1>";
                        }
                        ?>
                    </form>
                    </div>
                    <div>
                        <?php 
                            if ($errorCode == 3) {
                                echo "
                                    <p class='text-danger text-center mt-3'>
                                        intentos maximos de ingreso acabados, intentelo mas tarde
                                    </p>
                                ";
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