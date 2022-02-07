<?php
function associative() {
    return array(
        48 => 'Camisa',
        75 => 'Pantalon',
        26 => 'Chaqueta',
        35 => 'Gorra',
        45 => 'Camiseta',
        22 => 'Medias',
        17 => 'Correa',
        15 => 'Zapatos'
    );
}

function showKsort($array) {
    echo "Con la funcion ksort(), el array queda de la siguiente manera: <br>";
    echo "<pre>";
    ksort($array);
    print_r($array) ;
    echo "</pre>";
}

function showKrsort($array) {
    echo "Con la funcion krsort(), el array queda de la siguiente manera: <br>";
    echo "<pre>";
    krsort($array);
    print_r($array) ;
    echo "</pre>";
}