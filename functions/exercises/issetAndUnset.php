<?php
function issetAndUnset() {
    $variable = "Hola";

    echo isset($variable);
    unset($variable);
    echo isset($variable);
}