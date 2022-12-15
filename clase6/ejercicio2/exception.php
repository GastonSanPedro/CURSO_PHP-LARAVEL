<?php 
    class SobreGiroException extends Exception{
        public function __construct($message="Fondos insuficientes para hacer un sobregiro", $code=2) {}
    }
?>