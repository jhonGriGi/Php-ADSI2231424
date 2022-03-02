<?php

require_once "clases/Empleado.class.php";

$nombrePersona = isset($_POST['userName']) ? $_POST['userName'] : null;
$sueldoPersona = isset($_POST['userSalary']) ? $_POST['userSalary'] : null;
$emailPersona = isset($_POST['userEmail']) ? $_POST['userEmail'] : null;
$nacimientoPersona = isset($_POST['userDate']) ? $_POST['userDate'] : null;
$pesoPersona = isset($_POST['userWeight']) ? $_POST['userWeight'] : null;
$alturaPersona = isset($_POST['userHeight']) ? $_POST['userHeight'] : null;

$nuevaPersona = new Empleado(
  $nombrePersona, 
  $sueldoPersona, 
  $emailPersona, 
  $nacimientoPersona, 
  $pesoPersona, 
  $alturaPersona);

echo "Los resultados de la persona son: <br>";
echo $nuevaPersona->pagarImpuesto()."<br>";
echo $nuevaPersona->puedeVotar()."<br>";

?>
