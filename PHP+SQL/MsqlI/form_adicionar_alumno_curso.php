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
        <form action="./procesarDatos/InsertarAlumno.php" method="POST">
            <div class="form-group my-3">
                <label for="userName">Nombre completo</label>
                <input type="text" class="form-control" id="userName" name="userName" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group my-3">
                <label for="userEmail">Email address</label>
                <input type="email" name="userEmail" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Ingrese su Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mt-3">
                <label for="exampleUserCity">Select your Salary</label>
                <select class="form-control" id="exampleUserCity" name="codigocurso">
                  <?php
                   // Se incluye la clase Conexion
                    require_once './clases/Conexion.php';
                    // Se crea un objeto de la clase Conexion
                    $connObj = new Conexion();
                    // Se llama al método connect, el cual permitirá abrir una conexión a
                    //una base de datos MySQL
                    $conexion = $connObj->connect();
                    $registros = mysqli_query($conexion, "SELECT codigo,nombrecurso FROM
                      cursos") or
                    die("Problemas en el select:" . mysqli_error($conexion));
                    while ($reg = mysqli_fetch_array($registros)) {
                       echo "<option
                        value='".$reg['codigo']."'>".$reg['nombrecurso']."</option>";
                    }
                   ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-3 d-block mx-auto">Submit</button>
        </form>
<?php require_once './templates/links.php'; ?>
     </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
