<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../../../css/all.min.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <div class="col-10 mt-2 rounded bg-transparent mx-auto p-3">
      <h1 class="text-center">Informacion Personal</h1>
      <p>Nombre: <?php echo $objeto_empleado->__getNombreEmpleado(); ?></p>
      <p>Email: <?php echo $objeto_empleado->__getEmailEmpleado(); ?></p>
      <p>Peso: <?php echo $objeto_empleado->__getPesoEmpleado(); ?></p>
      <p>Altura: <?php echo $objeto_empleado->__getAlturaEmpleado(); ?></p>
    </div>
    <div class="col-10 my-2 rounded bg-transparent mx-auto p-3" style="text-align:justify;">
      <h1 class="text-center">Informacion Legal</h1>
      <?php
        echo $objeto_empleado->informacionSobreVoto();
        echo "<br>". $objeto_empleado->informacionSobreImpuesto();
      ?>
    </div>
    <?php include '../Views/return_home.php'; ?>
  </div>
<script src="../../../../js/bootstrap.min.js"></script>
</body>
</html>
