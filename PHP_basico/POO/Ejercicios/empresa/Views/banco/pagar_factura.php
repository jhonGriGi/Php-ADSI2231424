<?php
require_once '../../Model/banco/info_dinero.php';
/* require_once '../../Model/banco/modelo_pagar_factura.php'; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pagar facturas</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../../Views/css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Pagar facturas</h1>
    <div class="rounded mx-auto my-3">
    <h3 class="text-center">Dinero actual de <?php echo $reg['nombre_titular']; ?></h3>
      <p>Saldo actual: <strong> $<?php echo $reg['saldo']; ?></strong></p>
    </div>
    <form action="../../Model/banco/modelo_pagar_factura.php" method="POST">
      <div class="form-group my-3">
        <label for="nombre_factura">Coste de la factura</label>
        <input type="text" class="form-control" id="nombre_factura" name="nombre_factura" placeholder="Coloque el nombre de la factura">
      </div>
      <div class="form-group my-3">
        <label for="numero_factura">Numero factura</label>
        <input type="number" class="form-control" id="numero_factura" name="numero_factura" placeholder="Coloque el numero de la factura">
      </div>
      <div class="form-group my-3">
        <label for="coste_factura">Coste de la factura</label>
        <input type="number" class="form-control" id="coste_factura" name="coste_factura" placeholder="Coloque el coste de la factura">
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Pagar factura</button>
    </form>

    <?php
      require_once '../../Views/banco/templates/funciones_cuenta.php';
      require_once '../../Views/banco/templates/volver_perfil.php';
    ?>
  </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
