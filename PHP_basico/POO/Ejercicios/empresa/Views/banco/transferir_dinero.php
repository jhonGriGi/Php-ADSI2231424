<?php
require_once '../../Model/banco/info_dinero.php';

$success_code = isset($_GET['success']) ? $_GET['success'] : null;
$error_code = isset($_GET['error']) ? $_GET['error'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transferir dinero</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Transferir dinero de la cuenta</h1>
    <div class="rounded mx-auto my-3">
    <h3 class="text-center">Dinero actual de <?php echo $reg['nombre_titular']; ?></h3>
      <p>Saldo actual: <strong> $<?php echo $saldo; ?></strong></p>
    </div>
    <form action="../../Model/banco/modelo_transferir_dinero.php" method="POST">
      <div class="form-group my-3">
        <label for="cuenta_destino">Numero cuenta</label>
        <input type="number" class="form-control" id="cuenta_destino" name="cuenta_destino" placeholder="Coloque el numero de cuenta del destinatario">
      </div><div class="form-group my-3">
        <label for="transferir_dinero">Monto a transferir</label>
        <input type="number" class="form-control" id="transferir_dinero" name="transferir_dinero" placeholder="Coloque el saldo a transferir">
      </div>
      <?php if ($success_code == 1) { ?>
        <p class="text-success my-2">Dinero Transferido</p>
      <?php } ?>
      <?php if ($error_code == 4) { ?>
        <p class="text-danger my-2">Cuenta no encontrada</p>
      <?php } ?>
      <button type="submit" class="btn btn-primary d-block mx-auto">Transferir dinero</button>
    </form>
    <?php
      require_once './templates/funciones_cuenta.php';
      require_once './templates/volver_perfil.php';
    ?>
  </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
