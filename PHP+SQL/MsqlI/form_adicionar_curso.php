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
        <form action="procesardatos/insertarCurso.php" method="POST">
            <div class="form-group my-3">
                <label for="nombreCurso">Nombre completo</label>
                <input type="text" class="form-control" id="nombreCurso" name="nombreCurso" placeholder="Ingrese su nombre">
            </div>
            <!-- <div class="form-group mt-3">
                <label for="exampleUserCity">Select your Salary</label>
                <select class="form-control" id="exampleUserCity" name="codigocurso">
                    <option value="">Select...</option>
                    <option value="1">PHP</option>
                    <option value="2">ASP</option>
                    <option value="3">JSP</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
        </form>
        <a href="./listar_alumno.php">Listar los alumnos</a>
        <br>
        <a href="./index.php">Agregar Alumnos</a>
        <br>
        <a href="./listar_cursos.php">Listar los cursos</a>
        <br>
        <a href="./buscar_alumno.php"></a>

    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>