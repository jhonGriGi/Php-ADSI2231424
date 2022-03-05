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
    <h1>Registrar cuenta</h1>
    <form action="../Model/registrarCuenta.php" method="POST">
      <div class="form-group my-3">
        <label for="nombreTitular">Nombre completo</label>
        <input type="text" class="form-control" id="nombreTitular" name="nombreTitular" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group my-3">
        <label for="numeroCuenta">Numero de cuenta</label>
        <input type="number" class="form-control" id="numeroCuenta" name="numeroCuenta" placeholder="Ingrese su numero de cuenta">
      </div>
      <div class="form-group my-3">
        <label for="saldoCuenta">Saldo</label>
        <input type="number" name="saldoCuenta" class="form-control" id="saldoCuenta" placeholder="Ingrese su saldo">
      </div>
      <div class="form-group my-3">
        <label for="tipoCuenta">Ingrese el tipo de su cuenta</label>
        <input type="text" class="form-control" id="tipoCuenta" placeholder="Ingrese el tipo de cuenta">
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
    </form>
  </div>
<script src="../../../../js/bootstrap.min.js"></script>
</body>
</html>
