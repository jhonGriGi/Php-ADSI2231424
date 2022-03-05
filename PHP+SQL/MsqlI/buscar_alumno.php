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
        require_once '../clases/Conexion.php';
        // Se crea un objeto de la clase Conexion
        $connObj = new Conexion();
        // Se llama al método connect, el cual permitirá abrir una conexión a una base de 
        //datos MySQL
        $conexion = $connObj->connect();

        $mail = isset($_POST["mail"]) ? $_POST["mail"] : "";

        $SQL = "SELECT codigo,nombre, codigocurso FROM alumno WHERE mail='$mail'";

        $registros = mysqli_query($conexion, $SQL) or
            die("Problemas en el select:" . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre:" . $reg['nombre'] . "<br>";
            echo "Curso:";
            switch ($reg['codigocurso']) {
                case 1:
                    echo "PHP";
                    break;
                case 2:
                    echo "ASP";
                    break;
                case 3:
                    echo "JSP";
                    break;
            }
        } else {
            echo "No existe un alumno con ese mail.";
        }
        mysqli_close($conexion);
        ?>
        ?>
        <a href="./form_adicionar_curso.php">agregar nuevo curso</a>
        <br>
        <a href="./index.php">Listar los alumnos</a>
        <br>
        <a href="./listar_cursos.php">Listar los cursos</a>
        <br>
        <a href="./buscar_alumno.php"></a>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

<script src="../js/bootstrap.min.js"></script>
</body>

</html>