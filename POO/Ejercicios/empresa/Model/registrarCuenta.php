<?php

session_start();

$nombreTitular = isset($_POST['nombreTitular']) ? $_POST['nombreTitular'] : null;
$numeroCuenta = isset($_POST['numeroCuenta']) ? $_POST['numeroCuenta'] : null;
$saldoCuenta = isset($_POST['saldoCuenta']) ? $_POST['saldoCuenta'] : null;
$tipoCuenta = isset($_POST['tipoCuenta']) ? $_POST['tipoCuenta'] : null;


$infoUsuario = array(
  'numeroCuenta' => $numeroCuenta,
  'nombreTitular' => $nombreTitular,
  'saldo' => $saldoCuenta,
  'tipoCuenta' => $tipoCuenta
);

if (!isset($_SESSION['cuenta'])) {
  $_SESSION['cuenta'] = Array();
}

array_push($_SESSION['cuenta'], $infoUsuario);

header('Location: banco_adsi.php');


?>
