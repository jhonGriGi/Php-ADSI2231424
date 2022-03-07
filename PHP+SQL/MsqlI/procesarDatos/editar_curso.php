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
        $codigo_curso = isset($_POST['codigocurso']) ? $_POST['codigocurso'] : "";
        $SQL = "SELECT * FROM cursos WHERE codigo='$codigo_curso'";
        $registros = mysqli_query($conexion, $SQL) or die("Problemas en el select:" .
        mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
          $nombre_viejo = $reg['nombrecurso'];
      ?>
      <form action="./actualizar_curso.php" method="post">
        <div class="form-group my-3"> 
          <label for="nombrecurso">Ingrese el nuevo nombre del curso:</label>
          <input type="text" class="form-control" name="nombrecurso" value="<?php echo $nombre_viejo; ?>">
        </div>
        <br>
        <input type="hidden" name="codigo_curso" value="<?php echo $codigo_curso; ?>">
        <input type="submit" value="Actualizar">
      </form>
      <?php
       } else {
       echo "No existe el curso";
       }
      ?>
  <?php require_once '../templates/link_home.php'; ?>
   </div>

    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
