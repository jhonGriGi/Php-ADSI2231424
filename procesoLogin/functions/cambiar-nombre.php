<?php
require_once '../controller.php';
session_start();
$nuevo_nombre = isset($_POST['userNewName']) ? $_POST['userNewName'] : null;

$_SESSION['name'] = $nuevo_nombre;




header('Location: ./../perfil.php');
