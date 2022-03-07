<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buscar Alumno</title>
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
          $nombre_curso = isset($_POST["nombrecurso"]) ? $_POST["nombrecurso"] : "";
          $codigo_curso = isset($_POST["codigo_curso"]) ? $_POST["codigo_curso"] : "";
          $SQL = "UPDATE cursos SET nombrecurso='$nombre_curso' WHERE codigo=$codigo_curso";
          mysqli_query($conexion, $SQL) or die("Problemas en el select:" .
          mysqli_error($conexion));
          echo "El nombre del curso fue modificado con exito";
          mysqli_close($conexion);
          ?>
  <?php require_once '../templates/link_home.php'; ?>
   </div>

    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
