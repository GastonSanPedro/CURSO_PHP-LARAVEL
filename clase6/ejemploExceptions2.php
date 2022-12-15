<?php
// 5to caso, el uso FINALLY
/* 
function dividir($dividendo, $divisor){

    if($divisor==0){
        throw new Exception("la division por CERO no se puede");// ERROR en runtime de COMPILACION
    } elseif($divisor==2){
        throw new Exception("la division por 2 es para los PARES"); // ERROR FUNCIONAL
    }else {
    return $dividendo / $divisor;
    }
}
try{
   //print "respuesta: ".dividir(10, 5); // camino feliz, sin error, ejecuto FINALLY
   // print "respuesta: ".dividir(10, 2); // salio por el error funcional, ejecuto FINALLY
    print "respuesta: ".dividir(10, 0);// salio por el error Compilacion, ejecuto FINALLY
}catch (Exception $e){
    $mensaje = $e->getMessage();
    print $mensaje . "<br>";
} finally{
    print "<br> se completo la ejecucion y cierra todo <br>";
} */
?>

<?php
// 6to caso
$a = 33.4;
$b=1; // 0=true, 1=false
try{
    if($b){
        throw new DivisionByZeroError("Division por cero Fallida<br>",99);
    }
    if(is_int($a)==false || is_int($b)== false){
        throw new InvalidArgumentException("tipo de argumento invalido<br>", 100);
    }

} catch(DivisionByZeroError $e1){
    print $e1->getMessage().", ";
    print $e1->getCode()." es el codigo del error<br>";
    print $e1->getLine() . " es el nro de linea donde se produjo el error<br>";
} catch(InvalidArgumentException $e2){
    print $e2->getMessage().", ";
    print $e2->getCode()." es el codigo del error<br>";
    print $e2->getLine() . " es el nro de linea donde se produjo el error<br>";
} catch (Exception $e3){
    print $e3->getMessage();
} finally{
    print "<br> FIN ";
}

?>