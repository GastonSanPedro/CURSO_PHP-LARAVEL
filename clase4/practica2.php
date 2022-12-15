<?php 
//Calculate Areas.
CONST PI = 3.1416;
$randomNumber1 = random_int(1, 10);
$randomNumber2 = random_int(1, 10);
function calculateCircleArea($radio){
    $area = PI * pow($radio, 2) ;
    return $area;
}
function calculateSquareArea($ladoA, $ladoB){
    return $ladoA * $ladoB;
}

echo calculateCircleArea($randomNumber1) . "<br>";
echo calculateSquareArea($randomNumber1,$randomNumber2);
?>


<?php
 
$pi = 3.1416;
 
function calcularArea ($type) {
 
 global $pi;
 
 $lado = rand(1,8);
 $radio = rand(1,8);
 
 if ($type == 'cuadrado') echo $lado * $lado;
 if ($type == 'circulo') echo $pi * pow($radio,2);
}
 
calcularArea("circulo");

?>
