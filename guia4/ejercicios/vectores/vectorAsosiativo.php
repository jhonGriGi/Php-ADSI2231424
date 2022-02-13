<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder
    a cada componente por su nombre. Imprimir una componente del vector. -->
    <?php 
        $claves = array(
            "clave1" => "1234",
            "clave2" => "5678",
            "clave3" => "aeiou",
            "clave4" => "abcd"
        );
        
        echo "<h4>Todos los componentes del vector</h4>";
        echo "<ul>";
        echo "<li>".$claves["clave1"]."</li>";
        echo "<li>".$claves["clave2"]."</li>";
        echo "<li>".$claves["clave3"]."</li>";
        echo "<li>".$claves["clave4"]."</li>";
        echo "</ul>";

        echo "<h4>Ultimo componente del vector</h4>";
        echo $claves["clave4"];
    ?>
</body>
</html>