<?php
function showExplode() {
    $cadena = "Rosa*Juan*Pedro*Jose";
    $resultado = explode("*",$cadena);
    return $resultado;
}