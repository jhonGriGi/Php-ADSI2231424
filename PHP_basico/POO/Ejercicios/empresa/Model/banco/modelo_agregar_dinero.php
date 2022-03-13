<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$database = new Conexion();

$nuevo_saldo = isset($_POST['agregar_dinero']) ? $_POST['agregar_dinero'] : null;

$numero_cuenta = $_SESSION['sesion_actual'];
$controller_banco = new Cuenta();
$reg = $controller_banco->agregarDinero($numero_cuenta, $nuevo_saldo);

header('Location: ../../Views/banco/agregar_dinero.php');
?>