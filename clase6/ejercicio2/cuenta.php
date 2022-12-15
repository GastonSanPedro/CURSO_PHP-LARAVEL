<?php
include 'transferible.interface.php';
class Cuenta implements ITransferible{
    public $nroCuenta;
    public $saldo;

    function __construct($nroCuenta)
    {   
        $this->nroCuenta = $nroCuenta;
    }

    function obtenerSaldo(){
        return $this->saldo;
    }
    function depositar($cantidad){
        $this->saldo += $cantidad;
    }
    function extraer($cantidad){
        $this->saldo -= $cantidad;
    }
    function mover($cantidad, $nroCta){
        $this->saldo -= $cantidad;
        $nroCta->saldo += $cantidad;
    }
}
?>