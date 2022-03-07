<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buscar Nombre</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
</head>

<body>
    <div class="col-6 offset-3 mt-5 rounded bg-light shadow-lg mx-auto p-5">
      <?php
        // Se incluye la clase Conexion
        require_once '../clases/Conexion.php';
        // Se crea un objeto de la clase Conexion
        $connObj = new Conexion();
        // Se llama al método connect, el cual permitirá abrir una conexión a una base de
        /* datos MySQL */
        $conexion = $connObj->connect();
        $nombre_nuevo = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
        $SQL = "SELECT * FROM alumno WHERE mail='$mail'";
        $registros = mysqli_query($conexion, $SQL) or die("Problemas en el select:" .
        mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
      ?>
      <form action="./actualizar_alumno.php" method="post">
        <div class="form-group my-3"> 
          <label for="mailnuevo">Ingrese nuevo mail:</label>
          <input type="text" class="form-control" name="mailnuevo" value="<?php echo $mail; ?>">
        </div>
        <div class="form-group my-3"> 
          <label for="nuevoNombre">Ingrese el nuevo nombre</label>
          <input type="text" class="form-control" name="nuevoNombre" value="<?php echo $nombre_nuevo; ?>">
        </div>
        <br>
        <input type="hidden" name="mailviejo" value="<?php echo $mail; ?>">
        <input type="submit" value="Actualizar">
      </form>
      <?php
       } else {
       echo "No existe alumno con dicho mail";
       }
      ?>
  <?php require_once '../templates/link_home.php'; ?>
   </div>

    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
