<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Problema propuesto.
        // Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
        // La estructura for permite incrementar una variable de 2 en 2:
        echo "<h1>Ciclo for:</h1>";
        for ($i = 0; $i < 10; $i++) {
            $resultado = $i * 2;
            echo "$i x 2 = $resultado <br>";
        }

        echo "<h1>Ciclo while:</h1>";
        $iterador = 0;
        while ($iterador <= 10) {
            $resultado = $iterador * 2;
            echo "$iterador x 2 = $resultado <br>";
            $iterador++;
        }

        echo "<h1>Ciclo Do-while:</h1>";
        $iterador = 0;
        do {
            $resultado = $iterador * 2;
            echo "$iterador x 2 = $resultado <br>";
            $iterador++;
        } while ($iterador <= 10);
    ?>
</body>
</html>