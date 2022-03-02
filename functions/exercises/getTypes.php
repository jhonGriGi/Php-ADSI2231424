<?php
function getTypes() {
    $a = 5;
    echo "<p class='my-1'>El tipo de la variable es: <strong>";
    var_dump($a);
    echo "</strong> </p> </br>";

    echo "<p class='my-1'>El tipo de la variable es: <strong>";
    $b = "Hola";
    var_dump($b);
    echo "</strong> </p> </br>";

    echo "<p class='my-1'>El tipo de la variable es: <strong>";
    $c = 5.7;
    var_dump($c);
    echo "</strong> </p> </br>";

    echo "<p class='my-1'>El tipo de la variable es: <strong>";
    $d = true;
    var_dump($d);   
    echo "</strong> </p> </br>";
}