<?php

$error = isset($_GET['error']) ? $_GET['error'] : null;

switch ($error) {
    case 1:
        $msg_error = "Usuario y/o contraseña incorrectos";
        break;
    case 2:
        $msg_error = "Tiempo de sesion finalizado";
        break;
    case 3:
        $msg_error = "Acceso denegado";
        break;
    default:
        $msg_error = "";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-8 col-md-4">
                <div class="container-form p-3 rounded-lg mt-4 shadow">
                    <form action="controller.php" method="post">
                        <div class="mb-3">
                            <h1>Login Usuarios</h1>
                        </div>
                        <div class="mb-3">
                            <label for="userTxt">Usuario</label>
                            <input type="text" name="userTxt" id="userTxt" class="form-control" placeholder="Ingrese su Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="passTxt">Contraseña</label>
                            <input type="password" name="passTxt" id="passTxt" class="form-control" placeholder="Ingrese su Contraseña">
                        </div>
                        <?php if ($error) { ?>
                            <div class="invalid-feedback d-block mb-3">
                                <?php echo $msg_error; ?>
                            </div>
                        <?php } ?>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary " value="Enviar">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>