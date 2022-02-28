<?php
class Empleado {
    private $nombre;
    private $sueldo;
    private $email;
    private $fecha_nacimiento;
    private $peso;
    private $altura;

    public function __construct(
        $nombre,
        $sueldo,
        $email,
        $fechaNacimiento,
        $peso,
        $altura
    ) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function pagarImpuesto() {
        $pagaImpuesto = "debe pagar impuestos";
        $noPagaImpuesto = "no debe pagar impuestos";
        $msgPersona = "La persona $this->nombre ";
        $sueldoPersona = $this->sueldo;

        return calcularImpuesto($sueldoPersona) ? $msgPersona.$pagaImpuesto : $msg_persona.$noPagaImpuesto;
    }

    private function calcularImpuesto($sueldo) {
        return $sueldo > 2000000 ? true : false;
    }
}