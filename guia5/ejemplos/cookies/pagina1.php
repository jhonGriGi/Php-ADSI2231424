<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body
    <?php
        $color = isset($_COOKIE['color']) ? $_COOKIE['color'] : "";
        if($color != ""){
        echo " style=\"background:$_COOKIE[color]\"";
        }
    ?>
    >
    <form action="pagina2.php" method="post">
        Seleccione de que color desea que sea la página de ahora en 
        más:<br>
        <input type="radio" value="rojo" name="radio">Rojo<br>
        <input type="radio" value="verde" name="radio">Verde<br>
        <input type="radio" value="azul" name="radio">Azul<br>
        <input type="submit" value="Crear cookie">
    </form>
</body>

</html>