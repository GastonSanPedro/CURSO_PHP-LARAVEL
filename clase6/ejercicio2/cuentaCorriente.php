<?php
include 'cuenta.php';
class CuentaCorriente extends Cuenta{
    public $ultimoNroCheque;
    function obtenerUltimoNroCheque(){
        return $this->ultimoNroCheque;
    }
}

?>