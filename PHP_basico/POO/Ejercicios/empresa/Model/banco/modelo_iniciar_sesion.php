<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';
session_start();

$nombre_titular = isset($_POST['userName']) ? $_POST['userName'] : null;
$numero_cuenta = isset($_POST['userNumberAccount']) ? $_POST['userNumberAccount'] : null;

$controller_cuenta = new Cuenta();

if (empty($_SESSION['sesion_actual'])) {
  $reg = $controller_cuenta->verificarSesion($numero_cuenta, $nombre_titular);

  if ($resultado = mysqli_fetch_array($reg)) {
    $_SESSION['sesion_actual'] = $numero_cuenta;
  }

  if (empty($_SESSION['sesion_actual'])) {
    header('Location: ../../Views/banco/view_ingresar_banco.php?error=2');
  }
}

header('Location: ./modelo_perfil.php');
?>
