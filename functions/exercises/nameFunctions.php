<?php
function capitalizeName() {
    return ucwords("pablo emilio escobar gaviria");
}

function lowerEmail() {
    return strtolower("PABLOESCOBAR@GMAIL.COM");
}

function nameLength() {
    return strlen("pablo emilio escobar gaviria");
}

function getLastFour() {
    return substr("pablo emilio escobar gaviria", -4);
}

function verifyArray($name) {
    $allNames = array('Pedro', 'Teemo', 'Yasuo', 'Kratos');

    $trueAnswer = "El nombre esta en el array";
    $falseAnswer = "El nombre no esta en el array";

    return in_array($name, $allNames) ? $trueAnswer : $falseAnswer;
}