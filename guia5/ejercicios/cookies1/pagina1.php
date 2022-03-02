<?php
    $user_name = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : "";
    $user_email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : "";

    function printResult($user_name, $user_email) {
        if ($user_name != "" || $user_email != "") {
            echo "
                <div class='row text-center'>
                    <h1>Nombre:  $user_name </h1>
                    <h1>Email: $user_email </h1>
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
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="UserEmail" placeholder="Enter your email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                    </div>
                </div>
                <?php 
                    printResult($user_name, $user_email);
                ?>
            </div>
            
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>