<?php
require_once 'clases/persona.php';

// Creamos el objeto
// $persona = new Persona();
// Seteamos las propiedades
// $persona->nombre = 'Fernando';
// $persona->apellido = 'Gaitan';
// $persona->edad = 26;
//mostramos el resultado de las propiedades
// echo 'Nombre: '. $persona->nombre . '<br>';
// echo 'Apellido: '. $persona->apellido . '<br>';
// echo 'Edad: '. $persona->edad . '<br>';
// echo $persona->saludar();

$persona = new Persona('Fernando', 'Gaitan', 26);
echo $persona->saludar();

unset($persona);