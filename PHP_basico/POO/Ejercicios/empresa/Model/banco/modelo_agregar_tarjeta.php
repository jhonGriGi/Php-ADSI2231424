<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';

session_start();

$database = new Conexion();

$id_tarjeta = isset($_POST['id_tarjeta']) ? $_POST['id_tarjeta'] : null;
$saldo_tarjeta = isset($_POST['saldo_tarjeta']) ? $_POST['saldo_tarjeta'] : 0;

$sesion_actual = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();
$info_tarjeta = $controller_banco->infoTarjeta($sesion_actual);

if ($respuesta = mysqli_fetch_array($info_tarjeta)) {
  header('Location: ../../Views/banco/agregar_tarjeta_credito.php?error=1');
}

$controller_banco = new Cuenta();

$controller_banco->agregarTarjeta($id_tarjeta, $saldo_tarjeta, $sesion_actual);

session_abort();

header('Location: ../../Views/banco/agregar_tarjeta_credito.php?success=1');
?>
