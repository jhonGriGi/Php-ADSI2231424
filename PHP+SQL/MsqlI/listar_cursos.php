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
        <?php
        // Se incluye la clase Conexion
        require_once 'clases/Conexion.php';
        // Se crea un objeto de la clase Conexion
        $connObj = new Conexion();
        // Se llama al método connect, el cual permitirá abrir una conexión a una base de 
        // datos MySQL
        $conexion = $connObj->connect();
        $SQL = "SELECT codigo, nombrecurso FROM cursos";
        //Actividad 02.
        //Crear en la base de datos "universidad" otra tabla llamada "cursos". La estructura de esta 
        // segunda tabla debe ser:
        //codigo int primary key auto_increment
        //nombrecurso varchar(40)
        ///Utilizar el PHPMyAdmin o HeidiSQL para la creación de esta tabla. Implementar las dos páginas 
        //n//ecesarias para efectuar el alta de cursos. Un formulario para ingresar el nombre del curso
        //(form_adicionar_curso.html) y otra página donde se efectuará el insert
        //(procesarDatos/InsertarCurso.php).
        $registros = mysqli_query($conexion, $SQL) or
            die("Problemas en el select:" . mysqli_error($conexion));
        // Se recorren todos los registros de la Base de Datos
        while ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo:" . $reg['codigo'] . "<br>";
            echo "Nombre:" . $reg['nombrecurso'] . "<br>";
            echo "<br>";
            echo "<hr>";
        }
        // Se cierra la conexión
        mysqli_close($conexion);
        ?>
<?php require_once './templates/links.php'; ?>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

<script src="../js/bootstrap.min.js"></script>
</body>

</html>
