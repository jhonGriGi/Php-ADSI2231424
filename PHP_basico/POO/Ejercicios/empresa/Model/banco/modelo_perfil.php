<?php
require_once '../../Controller/banco/controller_banco.php';
session_start();

$sesion_actual = $_SESSION['sesion_actual'];

$controller_cuenta = new Cuenta();

require_once '../../Model/banco/components/security.php';
$reg =  $controller_cuenta->getUser($sesion_actual);
$info_dinero = $controller_cuenta->infoDinero($sesion_actual);
$info_tarjeta = $controller_cuenta->infoTarjeta($sesion_actual);

$saldo = 0;
if ($respuesta = mysqli_fetch_array($info_dinero)) {
  $saldo = $respuesta['saldo'];
}

$id_tarjeta = '';
if ($respuesta = mysqli_fetch_array($info_tarjeta)) {
  $id_tarjeta = $respuesta['id_tarjeta'];
}

if ($id_tarjeta == '') {
  $id_tarjeta = "No se encontraron tarjetas registradas";
}

require_once '../../Views/banco/perfil.php';
?>
