<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$nombre_titular = isset($_POST['userName']) ? $_POST['userName'] : '';
$numero_cuenta = isset($_POST['userNumberAccount']) ? $_POST['userNumberAccount'] : null;

$database = new Conexion();
$conexion = $database->connect();
$controller_cuenta = new Cuenta();

if (empty($_SESSION['sesion_actual'])) {
  $_SESSION['sesion_actual'] = $numero_cuenta;
}

$sesion_actual = isset($_SESSION['sesion_actual']) ?$_SESSION['sesion_actual'] : $numero_cuenta;

require_once '../../Model/banco/components/security.php';
$reg =  $controller_cuenta->getUser($sesion_actual);

if (empty($_SESSION['sesion_actual'])) {
  header('Location: ../../Views/banco/view_ingresar_banco.php?error=2');
}

require_once '../../Views/banco/perfil.php';
?>
