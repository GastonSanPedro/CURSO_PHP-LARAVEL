<?php
abstract class MiClaseAbstract{
    var $valor; // visibilidad de paquete
    const DATO = "algo";
    // metodos abstractos, SIN {}, SIN codigo
    abstract function getValor(); // metodo de tipo rutina
    abstract function saludar($saludo): string; // metodo de tipo funcion con RETURN

    // metodos concretos
    public function imprirmir(){
        print "<br> estoy en el imprimir de mi clase abstracta";
    }
}

class MiClaseConcreta extends MiClaseAbstract{
    
	function getValor() {
        print "<br> estoy en el getValor de mi clase concreta";
	}
	
	public function saludar($saludo): string {
        return "chau ".$saludo;
	}

    //overriding del metodo concreto
    public function imprirmir() {
        parent::imprirmir();
        print "<br> estoy en el imprimir de mi clase concreta";
    }
}

class MiClaseNieta extends MiClaseConcreta{
    function getValor()
    {
        parent::getValor();
        print "<br> estoy en el getValor de mi clase Nieta";
    }
}

// testing
//$test1 = new MiClaseAbstract(); // NO SE PUEDE INSTANCIAR UNA CLASE ABSTRACTA
$test2 = new MiClaseConcreta();
$test2->imprirmir();
$test2->saludar("Ale");
$test2->getValor();

$test3 = new MiClaseNieta();
$test3->imprirmir();
$test3->saludar("Ana");
$test3->getValor();
?>