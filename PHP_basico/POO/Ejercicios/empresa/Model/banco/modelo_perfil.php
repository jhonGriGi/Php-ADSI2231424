<?php
require_once '../../Controller/banco/Conexion.php';

session_start();
require_once '../../Model/banco/components/security.php';

$database = new Conexion();
$conexion = $database->connect();

$sesion_actual = $_SESSION['sesion_actual'];
$SQL = "SELECT * FROM usuarios where numero_cuenta=$sesion_actual";

$registros = mysqli_query($conexion, $SQL) or die ('Problemas con la consulta' . mysqli_error($conexion));

$reg = mysqli_fetch_array($registros);

mysqli_close($conexion);

?>
