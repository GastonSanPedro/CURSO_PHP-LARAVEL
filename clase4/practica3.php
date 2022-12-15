<?php 
//Verificando si el numero es Par o Impar.
function isEven($number){
    return $number % 2 == 0 ? "The number $number is even" : "the number $number is odd";
}
echo isEven(random_int(1,10));

function esPar($num){
    return ($num % 2) === 0;
};

echo esPar(3);
?>