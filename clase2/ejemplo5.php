<?php 
//operadores de logica
//y ----> AND , &&
//o ----> OR , ||

/*
$x and $y or $z
$x && $y || $z
$x and $y || $z
$x && $y or $z
*/

//Operadores de comparacion
/*
== igual
=== identico
!= diferente
<> diferente?? no estoy seguro.
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
*/
?>

<?php
// toma de deciciones
// IF
$humor = "contenta";
$dia = 2;

if($humor == "feliz" && $dia==2){
// salida por TRUE, ambas DEBEN SER TRUE, por &&
echo "estoy feliz <br>";
} else {
    echo "estoy contenta <br>";
}

if($humor == "feliz" || $dia==2){
    // salida por TRUE, al menos una DEBE SER TRUE, por ||
    echo "estoy feliz <br>";
    } else {
        echo "estoy contenta <br>";
    }

// if anidado
$temperatura="alta";
if($humor == "contenta" || $dia==2){
    // salida por TRUE, al menos una DEBE SER TRUE, por ||
    echo "estoy contenta <br>";
    }if($temperatura=="alta"){
        echo "estoy contenta con este calor <br>";
    } else {
        echo "no estoy contenta <br>";
    }

    $temperatura="baja";
if($humor == "contenta" && $dia==1){
    // salida por TRUE, al menos una DEBE SER TRUE, por ||
    echo "estoy contenta <br>";
    }elseif($temperatura=="alta"){
        echo "estoy contenta con este calor <br>";
    } else {
        echo "no estoy contenta <br>";
    }
    echo "*******************************<br>";
// SWITCH / CASE
$hora = 0;
switch($hora){
    case 0:
        echo "estoy en el cero <br>";
        break;
    case 5:
         echo "estoy en el cinco <br>";
         break;
    case 10:
         echo "estoy en el diez <br>";
         break;
    default:
        echo "estoy en el default <br>";
}
echo "*******************************<br>";
$cerveza = "negra";
switch($cerveza){
    case "ale":
    case "negra":
    case "artesanal":
        echo "estoy en las cervezas de > graduacion alcoholica <br>";
        break;
    case 'rubia':
    case 'trigo':
    case 'roja':    
        echo "estoy en las cervezas de < graduacion alcoholica <br>";
        break;   
    default:
        echo "no es cerveza <br>";
}       

// IF REDUCIDO --> usa operador ternario ? :
// Se usa cuando su respuesta se puede guardar en una variable

$humor = "triste";
$dia = 4;
$respuesta = ($humor == "feliz" && $dia == 3) ? "estoy triste en el dia 4" : "estoy feliz en el dia 3";

echo $respuesta;
?>