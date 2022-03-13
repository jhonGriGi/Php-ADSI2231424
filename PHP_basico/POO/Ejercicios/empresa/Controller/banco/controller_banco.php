<?php

class Cuenta {
  private $nombre_titular;
  private $saldo_titular;
  private $numero_cuenta;
  private $tipo_de_cuenta;

  public function __construct(
    $nombre_titular,
    $numero_cuenta,
    $tipo_de_cuenta
  )
  {
    $this->nombre_titular = $nombre_titular;
    $this->numero_cuenta = $numero_cuenta;
    $this->tipo_de_cuenta = $tipo_de_cuenta;
  }

  public function setSaldoTitular($saldo_titular)
  {
    $this->saldo_titular = $saldo_titular;
  }

  public function getSalarioTitular()
  {
    return $this->saldo_titular;
  }

  public function getNombreTitular()
  {
    return $this->nombre_titular;
  }

  public function getNumeroTitular()
  {
    return $this->numero_cuenta;
  }

  public function getTipoCuenta()
  {
    return $this->tipo_de_cuenta;
  }

  public function retirarDineroCuenta($cantidad_retirada)
  {
    $this->saldo_titular -= $cantidad_retirada;
  }
}

?>
