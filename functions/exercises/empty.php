<?php
function emptyFunction($valor) {
    $variable = $valor;
    
    return empty($variable) ? 'La variable SI esta vacia' : 'La variable NO esta vacia';
}