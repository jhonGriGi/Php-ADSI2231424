<?php

session_start();

$nombreTitular = isset($_POST['nombreTitular']) ? $_POST['nombreTitular'] : null;
$numeroCuenta = isset($_POST['numeroCuenta']) ? $_POST['numeroCuenta'] : null;

$searchUser = array(
  'numeroCuenta' => $numeroCuenta,
  'nombreTitular' => $nombreTitular
);

// variable para no utilzar $_SESSION todo el tiempo
$arrayUsers = $_SESSION['cuenta'];


if (in_array($searchUser, $arrayUsers)) {
  header('Location: banco_adsi.php');
} else {
  header('Location: ingresar.php?error=1');
}

?> 
