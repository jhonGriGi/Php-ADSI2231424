<?php
$errorCode = isset($_GET['error']) ? $_GET['error'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrarse en el banco</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/fontawesome.min.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1 class="text-center">Registrarse en Banco BIDG</h1>
    <h3>Ingrese los datos</h3>
    <form action="../../Model/banco/modelo_registrar_banco.php" method="POST">
      <div class="form-group my-3">
        <label for="userName">Nombre completo del titular</label>
        <input type="text" class="form-control" id="userName" name="userName" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group my-3">
        <label for="userNumberAccount">Numero de cuenta</label>
        <input type="number" class="form-control" id="userNumberAccount" name="userNumberAccount" placeholder="Ingrese el numero de cuenta">
      </div>
      <div class="form-group my-3">
        <select class="form-select" name="userTypeAccount" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="cuenta_corriente">Cuenta Corriente</option>
          <option value="cuenta_ahorros">Cuenta de ahorros</option>
          <option value="cuenta_movil">Cuenta Movil</option>
          <option value="cuenta_infantil">Cuenta Infantil</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
    <?php if ($errorCode == 1) {?>
      <p class="text-danger my-2">Error, Usuario y/o Numero de cuenta incorrectos</p>
    <?php } ?>
    </form>
    <a href="./view_ingresar_banco.php" class="d-block border p-2 m-2 text-center link">Iniciar Sesion</a>
    <?php require_once './templates/return_home.php'; ?>
  </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
