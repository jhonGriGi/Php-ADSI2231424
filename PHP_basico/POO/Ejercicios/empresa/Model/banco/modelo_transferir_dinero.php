<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$database = new Conexion();

$transferir_dinero = isset($_POST['transferir_dinero']) ? $_POST['transferir_dinero'] : null;
$cuenta_destino = isset($_POST['cuenta_destino']) ? $_POST['cuenta_destino'] : null;
$id_tarjeta = isset($_POST['id_tarjeta']) ? $_POST['id_tarjeta'] : null;
$id_tarjeta_propietario = isset($_POST['id_tarjeta_propia']) ? $_POST['id_tarjeta_propia'] : null;

$sesion_actual = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();
$buscar_persona = $controller_banco->verificarTransferencia($cuenta_destino);

if ($persona_correcta = mysqli_fetch_array($buscar_persona)) {
  $reg = $controller_banco->agregarDinero($id_tarjeta, $transferir_dinero);
  $resta_dinero = $controller_banco->retirarDinero($id_tarjeta_propietario, $transferir_dinero);
  header('Location: ../../Views/banco/transferir_dinero.php?success=1');
} else {
  header('Location: ../../Views/banco/transferir_dinero.php?error=4');
}

?>
