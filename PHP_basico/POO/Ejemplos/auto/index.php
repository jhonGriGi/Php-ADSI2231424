<?php

require_once 'clases/Auto.php';
$auto = new Auto(4, 4, 'Ford');
$auto->encenderMotor();
if ($auto->arrancar()) {
    echo 'El auto esta andando';
} else {
    echo 'No se puede arrancar el auto si el motor no esta encendido';
}

require_once 'clases/Moto.php';
$moto = new Moto(2, 'Yamaha');
$moto->encenderMotor();
if ($moto->arrancar()) {
    echo 'La moto esta andando';
} else {
    echo 'No se puede arrancar la moto si el motor no esta encendido';
}
