<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../css/all.min.css">

    <style>

    </style>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1 class="text-center">Formulario</h1>
                <hr>
                <div class="row">
                    <div class="col-6 offset-3">
                    <form action="pagina2.php" method="POST">
                        <div class="form-group mt-3">
                            <label for="exampleUserName">User Name</label>
                            <input type="text" class="form-control" id="exampleUserName" name="UserName" placeholder="Enter your username">
                        </div>
                        <div class="form-group mt-3">
                            <h4 class="lead my-2">Elige los deportes que practicas: </h4>
                            <input type="checkbox" name="Futbol"> Futbol
                            <br>
                            <input type="checkbox" name="Basket"> Basket
                            <br>
                            <input type="checkbox" name="Tennis"> Tennis
                            <br>
                            <input type="checkbox" name="Voley"> Voley
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>