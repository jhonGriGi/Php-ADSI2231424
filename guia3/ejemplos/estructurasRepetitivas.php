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
        for($f=1;$f<=100;$f++)
        {
        echo $f;
        echo "<br>";
        }

        $valor=rand(1,100);
        $inicio=1;
        while($inicio<=$valor)
        {
        echo $inicio;
        echo "<br>";
        $inicio++;
        }

        //Mostramos los números de los días del 1 a la fecha actual;
        $dia=date("d");
        $inicio=1;
        while($inicio<=$dia)
        {
        echo $inicio."<br>";
        $inicio++;
        }
?>
</body>
</html>