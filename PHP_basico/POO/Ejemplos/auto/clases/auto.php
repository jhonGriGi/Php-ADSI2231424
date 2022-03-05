<?php
require_once 'vehiculo.php';
class Auto extends Vehiculo
{
    private $motor_encendido = false;
    private $cantidad_de_puertas;
    private $cantidad_de_ruedas;
    private $marca;
    public function __construct($cantidad_de_ruedas, $marca)
    {
        parent::__construct(0, $cantidad_de_ruedas, $marca);
    }
    public function encenderMotor()
    {
        $this->motor_encendido = true;
    }
    public function apagarMotor()
    {
        $this->motor_encendido = false;
    }
    //Verifica si el motor está encendido para saber si el auto puede 
    // arrancar o no.
    public function arrancar()
    {
        return $this->motor_encendido;
    }
}
