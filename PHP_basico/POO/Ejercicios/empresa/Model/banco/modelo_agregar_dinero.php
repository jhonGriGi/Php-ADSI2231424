<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$database = new Conexion();

$nuevo_saldo = isset($_POST['agregar_dinero']) ? $_POST['agregar_dinero'] : null;
$id_tarjeta = isset($_POST['id_tarjeta']) ? $_POST['id_tarjeta'] : null;

$numero_cuenta = $_SESSION['sesion_actual'];
$controller_banco = new Cuenta();
$reg = $controller_banco->agregarDinero($id_tarjeta, $nuevo_saldo);

header('Location: ../../Views/banco/agregar_dinero.php');
?>
