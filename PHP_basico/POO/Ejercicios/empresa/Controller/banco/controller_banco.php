<?php
require_once '../../Controller/banco/Conexion.php';

class Cuenta {
  private $database;

  public function __construct()
  {
    $this->database = new Conexion();
  }

  public function getUser($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM usuarios WHERE numero_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas con el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    mysqli_close($conexion);

    return $reg;
  }

  public function verificarTransferencia($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM usuarios WHERE numero_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas con el SELECT, no se encontro el usuario ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

  public function verificarSesion($numero_cuenta, $nombre_titular)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM usuarios WHERE numero_cuenta = $numero_cuenta and nombre_titular = '$nombre_titular'";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas al verificar con el SELECT' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

  public function agregarDinero($numero_cuenta, $nuevo_saldo)
  {
    $conexion = $this->database->connect();
    $SQL = "SELECT saldo FROM usuarios WHERE numero_cuenta = $numero_cuenta";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    $saldo_actualizado = $reg['saldo'] + $nuevo_saldo;
    $actualizar_saldo = "UPDATE usuarios SET saldo = $saldo_actualizado WHERE numero_cuenta = $numero_cuenta";

    mysqli_query($conexion, $actualizar_saldo) or die ('Problemas con el UPDATE ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $reg;
  }

  public function retirarDinero($numero_cuenta, $resta_saldo)
  {
    $conexion = $this->database->connect();
    $SQL = "SELECT saldo FROM usuarios WHERE numero_cuenta = $numero_cuenta";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    $saldo_actualizado = $reg['saldo'] - $resta_saldo;

    $actualizar_saldo = "UPDATE usuarios SET saldo = $saldo_actualizado WHERE numero_cuenta = $numero_cuenta";

    mysqli_query($conexion, $actualizar_saldo) or die ('Problemas con el UPDATE ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $reg;
  }

  public function insertarFactura($numero_factura, $nombre_factura, $coste_factura, $sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "INSERT INTO factura (numero_factura, nombre_factura, coste_factura, numero_cuenta) VALUES ($numero_factura, '$nombre_factura', $coste_factura, $sesion_actual)";

    mysqli_query($conexion, $SQL) or die ('Problemas en el INSERT de factura ' . mysqli_error($conexion));

    mysqli_close($conexion);

  }

  public function mostrarFactura($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM factura WHERE numero_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

}

?>
