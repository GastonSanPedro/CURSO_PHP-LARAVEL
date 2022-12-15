<?php
class MiException extends Exception{
    var $dato;
    function __construct($message=null, $code=0, $dato){
        parent::__construct($message, $code);
        $this->dato = $dato;
    }

    function getDato(){
        return $this->dato;
    }

}
?>

<?php
function mostrar($dato){
if($dato =="algo"){
        throw new MiException("estoy arrojando un error", 101, $dato);
} else {
        print "no fallo<br>";
}
}

try{
    mostrar("algo");
}catch(MiException $e){
    print $e->getMessage().", ";
    print $e->getCode()." es el codigo del error<br>";
    print $e->getDato() . " es el dato<br>";
} catch (Exception $e1){
    print $e1->getMessage();
} finally{
    print "<br> FIN ";
}

?>