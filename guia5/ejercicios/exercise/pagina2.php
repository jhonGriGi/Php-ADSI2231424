<?php 
 $all_users = array(
    0 => array('user_name' => 'Kratos', 'user_password' => '1234'),
    1 => array('user_name' => 'Atreus', 'user_password' => '5678'),
    2 => array('user_name' => 'Odin', 'user_password' => '0987')
 );

$user_name = isset($_POST['UserName']) ? $_POST['UserName'] : "";
$user_password = isset($_POST['password']) ? $_POST['password'] : "";

/* if ($user_name == $all_users[0]['user_name'] || $user_password == $all_users[0]['user_password']) {
    header('Location: pagina1.php?accepted=1');
} */

for ($i = 0; $i < count($all_users); $i++) {
    if ($user_name == $all_users[$i]['user_name'] || $user_password == $all_users[$i]['user_password']) {
        header('Location: pagina1.php?accepted=1');
    }
    if ($user_name != $all_users[$i]['user_name'] && $user_password != $all_users[$i]['user_password']) {
        header('Location: pagina1.php?error=2');
    }
    
    /* if ($user_name == ) */
    
    if ($user_name != $all_users[$i]['user_name'] || $user_password != $all_users[$i]['user_password']) {
        header('Location: pagina1.php?error=1');
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
        <h1>Se ha verificado la sesion.</h1>
        <a href="pagina1.php" class='link-primary'>Ir a la otra página</a>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>