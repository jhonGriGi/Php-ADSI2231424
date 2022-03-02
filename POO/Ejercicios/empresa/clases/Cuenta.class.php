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

        if ($salarioActual < $retirarSaldo) {
            return "No tienes suficiente dinero para retirar";
        }

        $salarioActual -= $retirarSaldo;

        return "Saldo retirado, saldo actual: $this->saldo";
    }

    public function pagarFactura($costeFactura) {
        $saldoActual = $this->saldo;

        if ($saldoActual < $costeFactura) {
            return "No puede pagar la factura, no tiene suficiente saldo";
        }

        $saldoActual -= $costeFactura;

        return "Factura pagada, el saldo actual es: $saldoActual";
    }

    public function transferirDinero($numeroCuenta, $saldoDestinatario, $cantidadSaldo) {
        $saldoActual = $this->saldo;

        if ($saldoActual < $cantidadSaldo) {
            return "No puede transferir el dinero, no tiene suficiente saldo";
        }

        $saldoActual -= $cantidadSaldo;
        $saldoDestinatario += $cantidadSaldo;

        return "Saldo transferido, numero de cuenta del destinatario: $numeroCuenta, el saldo actual es: $saldoActual";
    }
}

?>
