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

    $SQL = "SELECT * FROM usuarios WHERE id_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas con el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    mysqli_close($conexion);

    return $reg;
  }

  public function infoDinero($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT saldo from tarjeta_credito WHERE id_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT de saldo ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

  public function verificarTransferencia($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM usuarios WHERE id_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas con el SELECT, no se encontro el usuario ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

  public function verificarSesion($id_cuenta, $nombre_titular)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM usuarios WHERE id_cuenta = $id_cuenta and nombre_titular = '$nombre_titular'";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas al verificar con el SELECT' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

  public function agregarDinero($id_tarjeta, $nuevo_saldo)
  {
    $conexion = $this->database->connect();
    $SQL = "SELECT saldo FROM tarjeta_credito WHERE id_tarjeta = $id_tarjeta";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    $saldo_actualizado = $reg['saldo'] + $nuevo_saldo;
    $actualizar_saldo = "UPDATE tarjeta_credito SET saldo = $saldo_actualizado WHERE id_tarjeta = $id_tarjeta";

    mysqli_query($conexion, $actualizar_saldo) or die ('Problemas con el UPDATE ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $reg;
  }

  public function retirarDinero($id_tarjeta, $resta_saldo)
  {
    $conexion = $this->database->connect();
    $SQL = "SELECT saldo FROM tarjeta_credito WHERE id_tarjeta = $id_tarjeta";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    $saldo_actualizado = $reg['saldo'] - $resta_saldo;

    $actualizar_saldo = "UPDATE tarjeta_credito SET saldo = $saldo_actualizado WHERE id_tarjeta = $id_tarjeta";

    mysqli_query($conexion, $actualizar_saldo) or die ('Problemas con el UPDATE ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $reg;
  }

  public function insertarFactura($numero_factura, $nombre_factura, $coste_factura, $sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "INSERT INTO factura (id_factura, nombre_factura, coste_factura, id_cuenta) VALUES ($numero_factura, '$nombre_factura', $coste_factura, $sesion_actual)";

    mysqli_query($conexion, $SQL) or die ('Problemas en el INSERT de factura ' . mysqli_error($conexion));

    mysqli_close($conexion);

  }

  public function mostrarFactura($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM factura WHERE id_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

  public function agregarTarjeta($id_tarjeta, $saldo_tarjeta, $sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "INSERT INTO tarjeta_credito VALUES ('$id_tarjeta', $saldo_tarjeta, $sesion_actual)";

    mysqli_query($conexion, $SQL) or die ('Problemas en el INSERT de la tarjeta ' . mysqli_error($conexion));

    mysqli_close($conexion);
  }

  public function infoTarjeta($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT id_tarjeta FROM tarjeta_credito WHERE id_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT de la tarjeta ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return $registros;
  }

}

?>
