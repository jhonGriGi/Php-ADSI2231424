<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$database = new Conexion();

$transferir_dinero = isset($_POST['transferir_dinero']) ? $_POST['transferir_dinero'] : null;
$cuenta_destino = isset($_POST['cuenta_destino']) ? $_POST['cuenta_destino'] : null;

$sesion_actual = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();
$buscar_persona = $controller_banco->verificarTransferencia($cuenta_destino);

if ($persona_correcta = mysqli_fetch_array($buscar_persona)) {
  $reg = $controller_banco->agregarDinero($cuenta_destino, $transferir_dinero);
  $resta_dinero = $controller_banco->retirarDinero($sesion_actual, $transferir_dinero);
  header('Location: ../../Views/banco/transferir_dinero.php?success=1');
} else {
  header('Location: ../../Views/banco/transferir_dinero.php?error=4');
}

?>
