<?php
require_once '../../Controller/banco/Conexion.php';
session_start();

$nombre_titular = isset($_POST['userName']) ? $_POST['userName'] : null;
$numero_cuenta = isset($_POST['userNumberAccount']) ? $_POST['userNumberAccount'] : null;

$_SESSION['sesion_actual'] = isset($numero_cuenta) ? $numero_cuenta : null;

$tipo_cuenta = '';
if ($_POST['userTypeAccount'] == 'cuenta_corriente') {
  $tipo_cuenta = 'Cuenta corriente';
} else if ($_POST['userTypeAccount'] == 'cuenta_ahorros') {
  $tipo_cuenta = 'Cuenta de ahorros';
} else if ($_POST['userTypeAccount'] == 'cuenta_movil') {
  $tipo_cuenta = 'Cuenta movil';
} else if ($_POST['userTypeAccount'] == 'cuenta_infantil') {
  $tipo_cuenta = 'Cuenta infantil';
} else {
  $tipo_cuenta = null;
}

$database = new Conexion();
$conexion = $database->connect();

$SQL = "INSERT INTO usuarios (numero_cuenta, nombre_titular, tipo_cuenta, saldo) VALUES ($numero_cuenta, '$nombre_titular', '$tipo_cuenta', 0)";

mysqli_query($conexion, $SQL) or die ('Problemas en la consulta'. mysqli_error($conexion));

mysqli_close($conexion);
header('Location: ./modelo_perfil.php');
