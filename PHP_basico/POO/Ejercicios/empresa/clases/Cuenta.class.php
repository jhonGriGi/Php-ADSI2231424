<?php 

class Cuenta {
    private $numeroCuenta;
    private $nombreTitular;
    private $saldo;
    private $tipoCuenta;

    public function __construct($numeroCuenta, $nombreTitular, $saldo, $tipoCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombreTitular = $nombreTitular;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }

    public function agregarDinero($nuevoSaldo) {
        $this->saldo += $nuevoSaldo;

        return "Saldo agregado, saldo actual: $this->saldo";
    }

    public function retirarDinero($retirarSaldo) {
        $salarioActual = $this->saldo;
        $msgRespuesta = "Nombre del titular: $this->nombreTitular \nTipo de cuenta: $this->tipoCuenta \nSaldo retirado, saldo actual: $this->saldo";

        if ($salarioActual < $retirarSaldo) {
            return "No tienes suficiente dinero para retirar";
        }

        $salarioActual -= $retirarSaldo;

        return $msgRespuesta;
    }

    public function pagarFactura($costeFactura) {
        $saldoActual = $this->saldo;
        $msgRespuesta = "Factura pagada \nNombre del titular: $this->nombreTitular\nEl saldo actual es: $saldoActual";

        if ($saldoActual < $costeFactura) {
            return "No puede pagar la factura, no tiene suficiente saldo";
        }

        $saldoActual -= $costeFactura;

        return $msgRespuesta;
    }

    public function transferirDinero($numeroCuenta, $saldoDestinatario, $cantidadSaldo) {
        $saldoActual = $this->saldo;
        $msgRespuesta = "Saldo transferido, numero de cuenta de origen: $this->numeroCuenta \nNumero de cuenta del destinatario: $numeroCuenta, \nEl saldo actual es: $saldoActual";

        if ($saldoActual < $cantidadSaldo) {
            return "No puede transferir el dinero, no tiene suficiente saldo";
        }

        $saldoActual -= $cantidadSaldo;
        $saldoDestinatario += $cantidadSaldo;

        return $msgRespuesta;
    }
}

?>
