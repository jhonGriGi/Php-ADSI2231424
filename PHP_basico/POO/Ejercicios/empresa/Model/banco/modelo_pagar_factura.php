<?php
require_once '../../Controller/banco/Conexion.php';
require_once '../../Controller/banco/controller_banco.php';

session_start();

$database = new Conexion();

// TODO reiniciar toda la logica de factura
$nombre_facturas = isset($_POST['nombre_factura']) ? $_POST['nombre_factura'] : null;
$numero_facturas = isset($_POST['numero_factura']) ? $_POST['numero_factura'] : null;
$coste_facturas = isset($_POST['coste_factura']) ? $_POST['coste_factura'] : null;

$sesion_actual = $_SESSION['sesion_actual'];

$controller_banco = new Cuenta();

$conexion = $database->connect();

$SQL = "INSERT INTO factura VALUES ($numero_facturas, '$nombre_facturas', $coste_facturas, $sesion_actual)";

mysqli_query($conexion, $SQL) or die ('Problemas en el INSERT de factura ' . mysqli_error($conexion));

$resultado_factura = $controller_banco->pagarFactura($sesion_actual,$coste_facturas);

mysqli_close($conexion);

/* $insertar_factura = $controller_banco->insertarFactura($numero_factura, $nombre_factura, $coste_factura, $sesion_actual); */

session_abort();
require_once '../../Views/banco/pagar_factura.php';

?>
