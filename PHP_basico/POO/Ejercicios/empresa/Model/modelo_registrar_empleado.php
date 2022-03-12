<?php
require_once '../Controller/controller_empleado.php';

$nombre_empleado = isset($_POST['userName']) ? $_POST['userName'] : null;
$salario_empleado = isset($_POST['userSalary']) ? $_POST['userSalary'] : null;
$email_empleado = isset($_POST['userEmail']) ? $_POST['userEmail'] : null;
$fecha_nacimiento = isset($_POST['userDate']) ? $_POST['userDate'] : null;
$peso_empleado = isset($_POST['userWeight']) ? $_POST['userWeight'] : null;
$altura_persona = isset($_POST['userHeight']) ? $_POST['userHeight'] : null;

/* $fecha_persona = DateTime::createFromFormat("Y-m-d", $fecha_nacimiento); */
/* $fecha_actual = new DateTime(); */
/* $diferencia = $fecha_actual->diff($fecha_persona); */
/* echo $diferencia->y; */

$objeto_empleado = new ControllerEmpleado(
  $nombre_empleado,
  $salario_empleado,
  $email_empleado,
  $fecha_nacimiento,
  $peso_empleado,
  $altura_persona
);

require_once '../Views/view_informacion_empleado.php';
?>
