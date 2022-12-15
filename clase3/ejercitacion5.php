<?php
//Este ejercicio calcula el precio total de una comida en un restaurante, con formato de ticket
function calculateTotalPrice($hamburguers, $chocolates, $colas)
{
    $totalPrice = 0;
    $hamburguersPrice = 4.95;
    $chocolatePrice = 1.95;
    $colaPrice = 0.85;
    $propine = 0.16;
    $IVA = 0.075;
    
    $totalHamburguers= $hamburguers * $hamburguersPrice;
    $totalChocolates= $chocolates * $chocolatePrice;
    $totalColas= $colas * $colaPrice;
    $totalPriceWithoutIVA = $totalHamburguers + $totalChocolates + $totalColas;
    $totalPriceWithIVA = $totalPriceWithoutIVA + ($totalPriceWithoutIVA * $IVA);
    $totalPropine = ($totalPriceWithIVA * $propine);
    $totalPrice = $totalPriceWithIVA + $totalPropine;

    makeTable($hamburguers, $hamburguersPrice, $chocolates, $chocolatePrice, $colas, $colaPrice, $totalHamburguers, $totalChocolates, $totalColas, $totalPriceWithoutIVA, $totalPriceWithIVA, $totalPropine, $totalPrice);

    return "<h1>The total price is " . $totalPrice . "</h1>";
}
 
function makeTable($hamburguers, $hamburguersPrice, $chocolates, $chocolatePrice, $colas, $colaPrice, $totalHamburguers, $totalChocolates, $totalColas, $totalPriceWithoutIVA, $totalPriceWithIVA, $totalPropine, $totalPrice){
    $table = "<table border='1'>";
    $table .= "<tr> <td>Item</td> <td>Quantity</td> <td>Price</td> <td>Total</td> </tr>";
    $table .= "<tr> <td>hamburguers</td> <td>$hamburguers</td> <td>$hamburguersPrice</td> <td>$totalHamburguers</td>";
    $table .= "<tr> <td>chocolates</td> <td>$chocolates</td> <td>$chocolatePrice</td> <td>$totalChocolates</td>";
    $table .= "<tr> <td>colas</td> <td>$colas</td> <td>$colaPrice</td> <td>$totalColas</td>";
    $table .= "<tr> <td colspan=2>Total sin impuesto</td> <td colspan=2>$totalPriceWithoutIVA</td> </tr> ";
    $table .= "<tr> <td colspan=2>Total con impuesto</td> <td colspan=2>$totalPriceWithIVA</td> </tr> ";
    $table .= "<tr> <td colspan=2>Propina</td> <td colspan=2>$totalPropine</td> </tr> ";
    $table .= "<tr> <td colspan=2>Total</td> <td colspan=2>$totalPrice</td> </tr> ";
    $table .= "</table>";
    echo $table;
}

echo calculateTotalPrice(2, 1, 1);
?>