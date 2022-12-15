<?php 
include 'cuenta.php';
class Cliente{
    public $legajo;
    public $nombre;
    public $apellido;
    public $cuenta;

    function __construct($legajo, $nombre, $apellido, $cuenta)
    {   
        $this->cuenta = new Cuenta($cuenta);
        $this->legajo = $legajo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cuenta = $cuenta;
    }
    function obtenerNombre(){
        return $this->nombre;
    }
    function obtenerApellido(){
        return $this->apellido;
    }
}


?>