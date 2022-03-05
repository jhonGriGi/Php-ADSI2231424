<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo usando PHP</title>
    <style type="text/css">
        p { color:white; }
        #contenedor{ 
            background-color: green;
            width: 300px;
            text-align: center;
            margin:auto; 
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php
        echo "<div id='contenedor'>";
        echo "<p>INFORMACIÓN</p>";
        echo "</div>";
        echo "<br>";

    // Realice un programa que muestre una serie de mensajes en la página empleando el comando 
    // echo. Tenga en cuenta que cuando utiliza el comando echo el mensaje se debe encerrar entre 
    // comillas dobles (como veremos más adelante también podrá encerrarse entre simples comillas).
    // Toda instrucción finaliza con punto y coma.
        $dia = date("d");
        if ($dia <= 10) {
            echo "<br>";
            echo "sitio activo";
        } else {
            echo "<br>";
            echo "sitio fuera de servicio";
        }

        // Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:
        // $num=rand(1,100);
        // En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria 
        // entre 1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si 
        // es menor o igual a 50 o si es mayor 

        $numrand = rand(1, 100);
        echo "<br>";
        echo $numrand;
        echo $numrand > 50 ? "<br>El numero es mayor a 50" : "<br>El numero es menor a 50";
    ?>
</body>
</html>