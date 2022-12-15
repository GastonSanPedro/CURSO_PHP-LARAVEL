<?php
//Este ejercicio calcula el precio total de una comida en un restaurante.
function calculateTotalPrice($hamburguers, $chocolates, $colas)
{
    $totalPrice = 0;
    $hamburguersPrice = 4.95;
    $chocolatePrice = 1.95;
    $colaPrice = 0.85;
    $propine = 0.16;
    $IVA = 0.075;
 
    $totalPrice = ($hamburguers * $hamburguersPrice) + ($chocolates * $chocolatePrice) + ($colas * $colaPrice);
    $totalPrice += ($totalPrice * $IVA);
    $totalPrice += ($totalPrice * $propine);
    return "<h1>The total price is " . $totalPrice . "</h1>";
}
 
echo calculateTotalPrice(2, 1, 1);
?>
