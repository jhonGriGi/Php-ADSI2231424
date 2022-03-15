<?php
require_once '../../Model/banco/info_dinero.php';

$success_code = isset($_GET['success']) ? $_GET['success'] : null;
$error_code = isset($_GET['error']) ? $_GET['error'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tarjeta de credito</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Agregar tarjeta de credito a la cuenta</h1>
    <div class="rounded mx-auto my-3">
      <p>Aqui podra asociar una tarjeta de credito a la cuenta del banco</p>
    </div>
    <form action="../../Model/banco/modelo_agregar_tarjeta.php" method="POST">
      <div class="form-group my-3">
        <label for="id_tarjeta">Numero Tarjeta</label>
        <input type="text" required class="form-control" id="id_tarjeta" name="id_tarjeta" placeholder="Coloque el numero de tarjeta">
      </div>
      <div class="form-group my-3">
        <label for="saldo_tarjeta">Saldo actual de la tarjeta</label>
        <input type="number" class="form-control" id="saldo_tarjeta" name="saldo_tarjeta" placeholder="Si no tiene saldo actual, ingrese 0">
        </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Agregar dinero</button>
    <?php if ($success_code == 1) { ?>
      <p class="text-success">La tarjeta fue creada con exito</p>
    <?php } ?>
    <?php if ($error_code == 1) { ?>
      <p class="text-danger">Ya existe una tarjeta de credito asociada!!</p>
    <?php } ?>
    </form>
    <?php
      require_once './templates/funciones_cuenta.php';
      require_once './templates/volver_perfil.php';
    ?>
  </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
