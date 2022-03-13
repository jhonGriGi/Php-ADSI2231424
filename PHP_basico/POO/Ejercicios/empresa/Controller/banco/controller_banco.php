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

  public function insertarFacturaEnBd
    (
      $nombre_factura,
      $numero_factura,
      $coste_factura,
      $sesion_actual
    )
  {
    $conexion = $this->database->connect();

    $SQL = "INSERT INTO factura (numero_factura, nombre_factura, coste_factura, numero_cuenta) VALUES ($numero_factura, '$nombre_factura', $coste_factura, $sesion_actual)";

    mysqli_query($conexion, $SQL) or die ('Problemas con el INSERT  ' . mysqli_error($conexion));

    mysqli_close($conexion);

    return false;
  }

  public function pagarFactura
    (
      $coste_factura,
      $sesion_actual
    )
  {
    $conexion = $this->database->connect();

    $this->retirarDinero($sesion_actual, $coste_factura);

    mysqli_close($conexion);

    return true;
  }

  public function mostrarFactura($sesion_actual)
  {
    $conexion = $this->database->connect();

    $SQL = "SELECT * FROM factura WHERE numero_cuenta = $sesion_actual";

    $registros = mysqli_query($conexion, $SQL) or die ('Problemas en el SELECT ' . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);

    while ($reg = mysqli_fetch_array($registros)) {
      $nombre_factura = $reg['nombre_factura'];
      $numero_factura = $reg['numero_factura'];
      $coste_factura = $reg['coste_factura'];
      echo "
  <tr>
    <td>$nombre_factura</td>
    <td>$numero_factura</td>
    <td>$coste_factura</td>
  </tr>
";

      mysqli_close($conexion);
    }

  }
}

?>
