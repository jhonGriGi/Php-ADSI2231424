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
      <form action="./procesarDatos/eliminar_alumno.php" method="POST">
        <div class="form-group my-3">
            <label for="mail">Email del estudiante</label>
            <input type="text" class="form-control" id="mail" name="mail" placeholder="Ingrese el Email">
        </div>
        <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
      </form>
      <?php require_once './templates/links.php'; ?>
     </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

<script src="../js/bootstrap.min.js"></script>
</body>

</html>
