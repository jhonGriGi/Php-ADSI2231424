<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
  <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
    <h1>Ingrese los datos</h1>
    <form action="../Model/modelo_registrar_empleado.php" method="POST">
      <div class="form-group my-3">
        <label for="userName">Nombre completo</label>
        <input type="text" class="form-control" id="userName" name="userName" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group my-3">
        <label for="userSalary">Salario del empleado</label>
        <input type="number" class="form-control" id="userSalary" name="userSalary" placeholder="Ingrese su salario">
      </div>
      <div class="form-group my-3">
        <label for="userEmail">Email address</label>
        <input type="email" name="userEmail" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Ingrese su Email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group my-3">
        <label for="useDate">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="userDate" id="userDate" placeholder="Ingrese su fecha de nacimiento">
      </div>
      <div class="form-group my-3">
        <label for="userWeight">Ingrese su peso</label>
        <input type="number" name="userWeight" placeholder="Ingrese su peso" class="form-control" id="userWeight">
      </div>
      <div class="form-group my-3">
        <label for="userHeight">Ingrese su altura</label>
        <input type="number" name="userHeight" placeholder="Ingrese su altura" class="form-control" id="userHeight">
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
    </form>
    <?php require_once './return_home.php'; ?>
  </div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
