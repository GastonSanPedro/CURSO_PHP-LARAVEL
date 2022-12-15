<?php 

class Luz{
    public $nroDeWatts;
    public $indicador;
    public $ubicacion;

    function __construct($nroDeWatts, $indicador=true, $ubicacion="X")
    {
        $this->nroDeWatts = $nroDeWatts;
        $this->indicador = $indicador;
        $this->ubicacion = $ubicacion;
    }

    function prender(){
        $this->indicador = true;
    }

    function apagar(){
        $this->indicador = false;
    }

    function estaPrendida(){
        return $this->indicador? print "Si esta prendida" : print "No esta prendida";
    }

    function imprimirUbicacion(){
        echo $this->ubicacion;
    }
}

class LuzBombita extends Luz{
    public $forma;

    // function __construct($nroDeWatts=50, $indicador=true, $ubicacion="X", $forma="redonda")
    // {
    //     parent::__construct($nroDeWatts, $indicador, $ubicacion);
    //     $this->forma = $forma;
    // }
}

class LuzTubo extends Luz{
    public $largoTubo;
    public $color;

    function __construct($nroDeWatts=50, $indicador=true, $ubicacion="X", $largoTubo="100", $color="verde")
    {
        parent::__construct($nroDeWatts, $indicador, $ubicacion);
        $this->largoTubo = $largoTubo;
        $this->color = $color;
    }

    function imprimirInfo(){
        echo "<br>";
        echo "numero de watts: " . $this->nroDeWatts . "<br>";
        echo "indicador: " . $this->indicador . "<br>";
        echo "Ubicacion: " . $this->ubicacion . "<br>";
        echo "LargoTubo: " . $this->largoTubo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
    function obtenerLargoTubo(){
        return $this->largoTubo;
    }
}

class Tester {
  function pruebaLuz() {
    $luz = new Luz(50);
    echo "<br> -----------------------------";
    echo "<br> INFORMACION DE LA LUZ: ";
    echo "<br>";
    echo "Mi ubicacion es: ";
    $luz->imprimirUbicacion();
    echo "<br>";
    echo "¿La luz esta prendida?: ";
    $luz->estaPrendida();
    echo "<br>";
    echo "Apague la luz";
     $luz->apagar();
    echo "<br>";
    echo "¿La luz esta prendida?: ";
    $luz->estaPrendida();
    echo "<br>";
    echo "Prendi la luz ";
    $luz->prender();
    echo "<br>";
    echo "¿La luz esta prendida?: ";
    $luz->estaPrendida();
        
  }

    function pruebaLuzTubo() {
        $tuboLuz = new LuzTubo();
        echo "<br> -----------------------------";
        echo "<br> INFORMACION DE LA LUZ TUBO: ";
        $tuboLuz->imprimirInfo();
    }

    function pruebaLuzBombita() {
        $bombitaLuz = new LuzBombita(50); //Si no declaro los parametros, me toma los valores por defecto del constructor padre.
        echo "Cree una bombita de luz : ";
        print_r($bombitaLuz);
    }
}

$tester = new Tester();
$tester->pruebaLuz();
$tester->pruebaLuzTubo();
$tester->pruebaLuzBombita();

?>