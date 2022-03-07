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
          $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
          $SQL = "SELECT codigo,nombre, codigocurso FROM alumno WHERE nombre='$nombre'";
          $registros = mysqli_query($conexion, $SQL) or
          die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg = mysqli_fetch_array($registros)) {
             echo "Nombre:" . $reg['nombre'] . "<br>";
             echo "Curso:";
             switch ($reg['codigocurso']) {
             case 1:echo "PHP";
             break;
             case 2:echo "ASP";
             break;
             case 3:echo "JSP";
             break;
             }
          }
          mysqli_close($conexion);
          ?>
  <?php require_once '../templates/link_home.php'; ?>
   </div>

    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
