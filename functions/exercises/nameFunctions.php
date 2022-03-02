<?php
function capitalizeName() {
    return ucwords("pablo emilio escobar gaviria");
}

function lowerEmail() {
    return strtolower("PABLOESCOBAR@GMAIL.COM");
}

function nameLength() {
    return "La cadena tiene ". strlen("pablo emilio escobar gaviria"). " caracteres";
}

function getLastFour() {
    return substr("pablo emilio escobar gaviria", -4);
}

function verifyArray($name) {
    $allNames = array('Pedro', 'Teemo', 'Yasuo', 'Kratos');

    $trueAnswer = "<strong>El nombre esta en el array</strong>";
    $falseAnswer = "<strong>El nombre no esta en el array</strong>";

    return in_array($name, $allNames) ? $trueAnswer : $falseAnswer;
}