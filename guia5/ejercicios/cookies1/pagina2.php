<?php 
    $user_name = isset($_POST['UserName']) ? $_POST['UserName'] : "";
    $user_email = isset($_POST['UserEmail']) ? $_POST['UserEmail'] : "";

    if (isset($_POST['UserName'])) 
        setcookie('user_name', $user_name, time()+60*60*24*365,"/");
    else if (isset($_POST['UserEmail']))
        setcookie("user_email", $user_email);
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
        <h1>Se creó la cookie.</h1>
        <a href="pagina1.php">Ir a la otra página</a>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>