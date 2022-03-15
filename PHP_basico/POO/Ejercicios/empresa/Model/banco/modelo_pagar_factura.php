<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';

session_start();

$database = new Conexion();

$nombre_facturas = isset($_POST['nombre_factura']) ? $_POST['nombre_factura'] : null;
$numero_facturas = isset($_POST['numero_factura']) ? $_POST['numero_factura'] : null;
$coste_facturas = isset($_POST['coste_factura']) ? $_POST['coste_factura'] : null;

$sesion_actual = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();

$controller_banco->insertarFactura($numero_facturas, $nombre_facturas, $coste_facturas, $sesion_actual);

$resultado_factura = $controller_banco->retirarDinero($sesion_actual, $coste_facturas);


session_abort();
require_once '../../Views/banco/pagar_factura.php';

?>
