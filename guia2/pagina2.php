<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <?php
        // Definir una variable de cada tipo: integer, double, string y boolean. Luego imprimirlas en la 
        // página, una por línea
        $dia = 24; //Se declara una variable de tipo integer.
        $sueldo = 758.43; //Se declara una variable de tipo double.
        $nombre = "juan"; //Se declara una variable de tipo string.
        $exite = true; //Se declara una variable boolean.
        echo "Variable entera:";
        echo $dia;
        echo "<br>";
        echo "Variable double:";
        echo $sueldo;
        echo "<br>";
        echo "Variable string:";
        echo $nombre;
        echo "<br>";
        echo "Variable boolean:";
        echo $exite;

        // Definir tres variables enteras. Luego definir un string que incorpore dichas variables y las 
        // sustituya en tiempo de ejecución.
        // Recordar que una variable se sustituye cuando el string está encerrado por comillas dobles:
        // $precio=90;
        // echo "La computadora tiene un precio de $precio";
        $nombre = "Kratos";
        $raza = "Semi-dios";
        $ciudadNacimiento = "Sparta";
        $edad = 1000;

        echo "<br>";
        echo "EL nombre es: $nombre,<br>Su raza es: $raza,<br>Nacido en: $ciudadNacimiento,<br>Su edad es: $edad";

        //Generar un valor aleatorio entre 1 y 3. Luego imprimir en español el número (Ej. si se genera el 
        // 3 luego mostrar en la página el string "tres").
        // Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:
        // if ($valor==3)
        // {
        //  //algoritmo
        // }

        $numrand = rand(1, 4);

        echo "<br>";
        if ($numrand == 1) {
            echo "EL valor es uno";
        } else if ($numrand == 2) {
            echo "El valor es dos";
        } else {
            echo "El valor es tres";
        }
    ?>
</body>
</html>