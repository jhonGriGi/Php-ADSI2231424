<?php
function arrayFunctions() {
   return array('Ana', 'Juan', 'Pedro', 'Maria', 'Esteban', 'Luis', 'Jose', 'Alejandro');
}

function showAsort($array) {
    echo "Con la funcion asort(), el array queda de la siguiente manera: <br>";
    echo "<pre>";
    asort($array);
    print_r($array) ;
    echo "</pre>";
}

function showArsort($array) {
    echo "Con la funcion arsort(), el array queda de la siguiente manera: <br>";
    echo "<pre>";
    arsort($array);
    print_r($array) ;
    echo "</pre>";
}
?>