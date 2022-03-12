<?php
class ControllerEmpleado  {
  private $nombre_empleado;
  private $saldo_empleado;
  private $email_empleado;
  private $fecha_nacimiento;
  private $peso_empleado;
  private $altura_empleado;

  public function __construct(
    $nombre_empleado,
    $saldo_empleado,
    $email_empleado,
    $fecha_nacimiento,
    $peso_empleado,
    $altura_empleado
  )
  {
    $this->nombre_empleado = $nombre_empleado;
    $this->saldo_empleado = $saldo_empleado;
    $this->email_empleado = $email_empleado;
    $this->fecha_nacimiento = $fecha_nacimiento;
    $this->peso_empleado = $peso_empleado;
    $this->altura_empleado = $altura_empleado;
  }

  public function informacionSobreImpuesto() {
    $msg_persona = "La persona ";
    $debe_pagar_impuesto = " debe pagar impuestos";
    $no_debe_pagar_impuesto = " no debe pagar impuestos";

    return $msg_persona . ($this->debePagarImpuesto() ? $debe_pagar_impuesto : $no_debe_pagar_impuesto);
  }

  public function informacionSobreVoto() {
    $msg_persona = "La persona ";
    $puede_votar = " tiene la edad suficiente para votar";
    $no_puede_votar = " no tiene la edad suficiente para votar";

    return $msg_persona . ($this->calcularEdadEmpleado() ? $puede_votar : $no_puede_votar);
  }

  public function __getNombreEmpleado()
  {
    return $this->nombre_empleado;
  }

  public function __getEmailEmpleado()
  {
    return $this->email_empleado;
  }

  public function __getPesoEmpleado()
  {
    return $this->peso_empleado;
  }

  public function __getAlturaEmpleado()
  {
    return $this->altura_empleado;
  }

  private function debePagarImpuesto() {
    return $this->saldo_empleado > 2000000;
  }

  private function calcularEdadEmpleado() {
    $fecha_persona = DateTime::createFromFormat("Y-m-d", $this->fecha_nacimiento);
    $fecha_actual = new DateTime();
    $diferencia = $fecha_actual->diff($fecha_persona);

    return $diferencia->y >= 18;
  }
}
