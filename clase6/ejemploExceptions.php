<?php
// 1er caso ... SIN EXCEPTION
/* function dividir($dividendo, $divisor){
    return $dividendo / $divisor;
}

print dividir(10, 0); */

// 2do caso ... CON EXCEPTION
/* function dividir($dividendo, $divisor){
    if($divisor==0){
        throw new Exception("la division por CERO no se puede");
    } else {
        return $dividendo / $divisor;
    }
}
print dividir(10, 0); */

// 3er caso ... con TRY CATCH/* 
/* function dividir($dividendo, $divisor){

    if($divisor==0){
        throw new Exception("la division por CERO no se puede");
    } else {
        return $dividendo / $divisor;
    }
}

try {
    print dividir(10, 0);
} catch(Exception $e){
    $mensaje = $e->getMessage();
    print $mensaje . "<br>";
}  */

// 4to caso
/* function dividir1($dividendo, $divisor)
{
    try {
        if ($divisor == 0) {
            throw new Exception("la division por CERO no se puede");
        } else {
            return $dividendo / $divisor;
        }

    } catch (Exception $e) {
        $mensaje = $e->getMessage();
        print $mensaje . "<br>";
    }
}

print dividir1(10, 0); */

// 
try{
    function dividir($dividendo, $divisor){
        if($divisor == 0){
            throw new Exception("La division por CERO no se puede hacer");
        } else {
                return $dividendo / $divisor;
        }
    }
  print(dividir(10, 0));
} catch(Exception $e){
$mensaje = $e->getMessage();
print $mensaje . "<br>";
}

print dividir(5,6);
;