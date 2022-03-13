<?php
require_once '../../Model/banco/info_dinero.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Retirar dinero</title>
  <link rel="stylesheet" href="../../../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../../../../css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Retirar dinero de la cuenta</h1>
    <div class="rounded mx-auto my-3">
    <h3 class="text-center">Dinero actual de <?php echo $reg['nombre_titular']; ?></h3>
      <p>Saldo actual: <strong> $<?php echo $reg['saldo']; ?></strong></p>
    </div>
    <form action="../../Model/banco/modelo_retirar_dinero.php" method="POST">
      <div class="form-group my-3">
        <label for="retirar_dinero">Retirar saldo</label>
        <input type="number" class="form-control" id="retirar_dinero" name="retirar_dinero" placeholder="Coloque el saldo a retirar">
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Retirar dinero</button>
    </form>
    <?php
      require_once './templates/funciones_cuenta.php';
      require_once './templates/volver_perfil.php';
      require_once './templates/return_home.php';
    ?>
  </div>
<script src="../../../../../js/bootstrap.min.js"></script>
</body>
</html>
