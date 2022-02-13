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
        //Almacenar en un vector asociativo la cantidad de dias que tiene
        //cada mes del año. Luego accederlo por su nombre como subindice.
        $mes['enero']=31;
        $mes['febrero']=29;
        $mes['marzo']=31;
        $mes['abril']=30;
        $mes['mayo']=31;
        $mes['junio']=30;
        $mes['julio']=31;
        $mes['agosto']=31;
        $mes['septiembre']=30;
        $mes['octubre']=31;
        $mes['noviembre']=30;
        $mes['diciembre']=31;
        echo "Enero tiene:".$mes['enero']."<br>";
        echo "Agosto tiene:".$mes['agosto']."<br>";
        echo "Septiembre tiene:".$mes['septiembre']."<br>";

    ?>
</body>
</html>