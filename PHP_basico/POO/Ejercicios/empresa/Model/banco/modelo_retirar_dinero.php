<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$database = new Conexion();
$conexion = $database->connect();

$nuevo_saldo = isset($_POST['retirar_dinero']) ? $_POST['retirar_dinero'] : null;
$id_tarjeta = isset($_POST['id_tarjeta']) ? $_POST['id_tarjeta'] : null;

$numero_cuenta = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();
$reg = $controller_banco->retirarDinero($id_tarjeta, $nuevo_saldo);

header('Location: ../../Views/banco/retirar_dinero.php');
?>
