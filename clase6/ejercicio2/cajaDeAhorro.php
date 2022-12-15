<?php 
include 'cuenta.php';
class CajaDeAhorro extends Cuenta
{
    function __construct($nroCuenta)
    {
        parent::__construct($nroCuenta);
    }
}
?>