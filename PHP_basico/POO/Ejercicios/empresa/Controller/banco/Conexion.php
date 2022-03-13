<?php

class Conexion {
  private $localhost;
  private $username;
  private $pass;
  private $database;

  public function __construct()
  {
    $this->localhost = 'localhost';
    $this->username = 'root';
    $this->pass = '06031103';
    $this->database = 'banco_BIDG';
  }

  public function connect()
  {
    return mysqli_connect($this->localhost, $this->username, $this->pass, $this->database);
  }

  public function getUser($sesion_actual)
  {
    $conexion = $this->connect();

    $SQL = "SELECT * FROM usuarios WHERE numero_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas con el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    mysqli_close($conexion);

    return $reg;
  }
}

?>
