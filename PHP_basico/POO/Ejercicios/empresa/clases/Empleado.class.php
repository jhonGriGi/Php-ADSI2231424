<?php
class Empleado {
    private $nombre;
    private $sueldo;
    private $email;
    private $fechaNacimiento;
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

        return $msgPersona. ($this->calcularImpuesto() ? $pagaImpuesto : $noPagaImpuesto);
    }

    public function puedeVotar() {
        $msgPersona = "La persona $this->nombre ";
        $puedeVotar = "puede votar";
        $edadPersona = $this->calcularEdad();
        $noPuedeVotar = "no puede votar, porque su edad es: ";

        return $msgPersona. ($edadPersona > 18 ? $puedeVotar : $noPuedeVotar.$edadPersona);
        
    }

    private function calcularImpuesto() {
        return $this->sueldo > 2000000;
    }

    private function calcularEdad() {
        $fechaActual = new DateTime();
        $fechaPersona = new DateTime($this->fechaNacimiento);
        $fechaPersona->format('Y-m-d');
        $diferencia = $fechaActual->diff($fechaPersona);

        return $diferencia->format("%y");
    }
}
