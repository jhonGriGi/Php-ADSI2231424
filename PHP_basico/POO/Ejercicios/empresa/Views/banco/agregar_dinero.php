<?php
require_once '../../Model/banco/info_dinero.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ingresar dinero</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Agregar dinero a la cuenta</h1>
    <div class="rounded mx-auto my-3">
    <h3 class="text-center">Dinero actual de <?php echo $reg['nombre_titular']; ?></h3>
      <p>Saldo actual: <strong> $<?php echo $saldo; ?></strong></p>
    </div>
    <form action="../../Model/banco/modelo_agregar_dinero.php" method="POST">
      <div class="form-group my-3">
        <label for="agregar_dinero">Nuevo saldo</label>
        <input type="number" class="form-control" id="agregar_dinero" name="agregar_dinero" placeholder="Coloque el nuevo saldo">
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Agregar dinero</button>
    </form>
    <?php
      require_once './templates/funciones_cuenta.php';
      require_once './templates/volver_perfil.php';
    ?>
  </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
