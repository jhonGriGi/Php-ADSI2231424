<?php
require_once '../../Model/banco/modelo_perfil.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Perfil de usuario</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../../Views/css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Bienvenido al Banco BIDG</h1>
    <h4 class="text-center"><i>¿Que deseas hacer <?php echo $reg['nombre_titular']; ?>?</i></h4>
    <div class="rounded mx-auto my-3">
      <h3 class="text-center">Informacion de cuenta</h3>
      <p>Numero de cuenta: <strong> <?php echo $reg['id_cuenta']; ?> </strong></p>
      <p>Tipo de cuenta: <strong> <?php echo $reg['tipo_cuenta']; ?></strong></p>
      <p>Numero de tarjeta de credito: <strong> <?php echo $id_tarjeta; ?></strong></p>
      <p>Saldo actual: <strong> $<?php echo $saldo; ?></strong></p>
    </div>
    <?php
      require_once '../../Views/banco/templates/funciones_cuenta.php';
      require_once '../../Views/banco/templates/volver_perfil.php';
    ?>
  </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
