<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';

session_start();

$database = new Conexion();

$nombre_factura = isset($_POST['nombre_factura']) ? $_POST['nombre_factura'] : '';
$numero_factura = isset($_POST['numero_factura']) ? $_POST['numero_factura'] : '';
$coste_factura = isset($_POST['coste_factura']) ? $_POST['coste_factura'] : '';

$sesion_actual = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();
$controller_banco->insertarFacturaEnBd($nombre_factura, $numero_factura, $coste_factura, $sesion_actual);

$resultado_factura = $controller_banco->pagarFactura($numero_factura, $coste_factura, $sesion_actual);

session_abort();
require_once '../../Views/banco/pagar_factura.php';

?>
