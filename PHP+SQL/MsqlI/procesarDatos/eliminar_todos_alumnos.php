<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eliminar todos los alumnos</title>
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
        // Se llama al método connect, el cual permitirá abrir una conexión a una base de
        //datos MySQL
        $conexion = $connObj->connect();
        mysqli_query($conexion, "DELETE FROM alumno") or die("Problemas en el select:" .
        mysqli_error($conexion));
        echo "Se efectuó el borrado de todos los alumnos.";
        mysqli_close($conexion);
        
        ?>
<?php require_once '../templates/link_home.php'; ?>
   </div>

    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
