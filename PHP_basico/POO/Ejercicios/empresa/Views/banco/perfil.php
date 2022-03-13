<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrarse en el banco</title>
  <link rel="stylesheet" href="../../../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../../../../css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Bienvenido al Banco BIDG</h1>
    <h4 class="text-center"><i>¿Que deseas hacer <?php echo $reg['nombre_titular']; ?>?</i></h4>
    <div class="rounded mx-auto my-3">
      <h3 class="text-center">Informacion de cuenta</h3>
      <p>Numero de cuenta: <strong> <?php echo $reg['numero_cuenta']; ?> </strong></p>
      <p>Tipo de cuenta: <strong> <?php echo $reg['tipo_cuenta']; ?></strong></p>
      <p>Saldo actual: <strong> $<?php echo $reg['saldo']; ?></strong></p>
    </div>
    <div class="border rounded mx-auto my-3 p-2">
      <a href="./agregar_dinero.php" class="d-block border p-2 m-2 text-center link">
        Agregar Dinero
      </a>
      <a href="#" class="d-block border p-2 m-2 text-center link">
        Retirar Dinero
      </a>
      <a href="#" class="d-block border p-2 m-2 text-center link">
        Pagar una factura
      </a>
      <a href="#" class="d-block border p-2 m-2 text-center link">
        Transferir Dinero
      </a>
    </div>

    <?php
      require_once './templates/volver_perfil.php';
      require_once './templates/return_home.php';
    ?>
  </div>
<script src="../../../../../js/bootstrap.min.js"></script>
</body>
</html>
