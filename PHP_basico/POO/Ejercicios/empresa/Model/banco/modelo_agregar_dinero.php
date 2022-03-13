<?php
require_once '../../Controller/banco/Conexion.php';
session_start();

$database = new Conexion();
$conexion = $database->connect();

$nuevo_saldo = isset($_POST['agregar_dinero']) ? $_POST['agregar_dinero'] : null;

$numero_cuenta = $_SESSION['sesion_actual'];
$SQL = "SELECT saldo FROM usuarios WHERE numero_cuenta = $numero_cuenta";

$registros = mysqli_query($conexion, $SQL) or die ('Problemas con la consulta' . mysqli_error($conexion));

$reg = mysqli_fetch_array($registros);

$saldo_actualizado = $reg['saldo'] + $nuevo_saldo;
$nueva_consulta = "UPDATE usuarios SET saldo = $saldo_actualizado WHERE numero_cuenta = '$numero_cuenta'";

mysqli_query($conexion, $nueva_consulta) or die ('Problemas con el UPDATE' . mysqli_error($conexion));

mysqli_close($conexion);

header('Location: ../../Views/banco/agregar_dinero.php');
?>
