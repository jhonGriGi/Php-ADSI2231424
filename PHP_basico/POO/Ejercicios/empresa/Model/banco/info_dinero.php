<?php
require_once '../../Controller/banco/controller_banco.php';

session_start();
require_once '../../Model/banco/components/security.php';

$sesion_actual = $_SESSION['sesion_actual'];
$controller_cuenta = new Cuenta();
$reg = $controller_cuenta->getUser($sesion_actual);

session_abort();
?>
