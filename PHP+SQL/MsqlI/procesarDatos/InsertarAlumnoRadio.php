<?php
// Se incluye la clase Conexion
require_once '../clases/Conexion.php';
// se crea un objeto de la clase Conexion
$connObj = new Conexion();
// Se llama al metodo connect, el cual permitira abrir una conexion a una base de datos MySql
$conexion = $connObj->connect();

// Se reciben los datos del formulario
$nombre = isset($_POST['userName']) ? $_POST['userName'] : null;
$mail = isset($_POST['userEmail']) ? $_POST['userEmail'] : null;
$codigocurso = isset($_POST['radio']) ? $_POST['radio'] : null;
// Se arma la sentencia SQL
$SQL = "INSERT INTO alumno (nombre, mail, codigocurso) VALUES ('$nombre','$mail',$codigocurso)";

$consulta = "SELECT * FROM alumno";
$respuesta = mysqli_query($conexion, $consulta) or die("Problemas en el INSERT" . mysqli_error($conexion));

// Se ejecuta el metodo que permite realizar una consulta a la BD. Se le envia como parametro la conexion y la consulta
mysqli_query($conexion, $SQL) or die("Problemas en el INSERT" . mysqli_error($conexion));

// SE cierra la conexion
mysqli_close($conexion);

?>

<DOCTYPE html>
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
            <p class="text-primary">
                <?php echo "El alumno fue dado de alta.";

                ?>
            </p>
        </div>
        <script src="../js/bootstrap.min.js"></script>
<?php require_once '../templates/link_home.php'; ?>
    </body>

    </html>
