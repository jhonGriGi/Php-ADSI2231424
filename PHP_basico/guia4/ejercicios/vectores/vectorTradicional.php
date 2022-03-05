<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último
    elemento del vector. -->
    <?php
        $diasSemana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
        echo "El primer dia de la semana es: $diasSemana[0] <br>El Ultimo dia de la semana es: ".$diasSemana[count($diasSemana) - 1];
    ?>
</body>
</html>