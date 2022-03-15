<?php
require_once '../../Controller/banco/controller_banco.php';
session_start();

$sesion_actual = $_SESSION['sesion_actual'];

$controller_cuenta = new Cuenta();

require_once '../../Model/banco/components/security.php';
$reg =  $controller_cuenta->getUser($sesion_actual);

require_once '../../Views/banco/perfil.php';
?>
