<?php 
include 'cliente.php';
class Test{
    function main(){
        $JuanPerez = new Cliente(1, "Juan", "Perez", 941);
        $JuanPerez->cuenta->depositar(100);

    }
}

?>