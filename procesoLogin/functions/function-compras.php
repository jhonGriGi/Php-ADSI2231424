<?php
require_once '../controller.php';
$cantidad_compras = isset($_POST['userBuys']) ? $_POST['userBuys'] : null;

setcookie('compras', $cantidad_compras, time() + 365 * 24 * 60 * 60, "/");

header('Location: ./../compras.php');
