<?php
//operadores
$idioma = "en";
echo "hola " . " " . "mundo"; //el punto es el operador de concatenacion, no usamos & para concatenar ni +;
echo "hola" . $idioma . "<br>"; //se hace asi y no echo "hola" + $idioma.

echo 10 + 3; echo "<br>";
echo 10 - 3; echo "<br>";
echo 10 * 3; echo "<br>";
echo 10 / 3; echo "<br>";
echo 10 % 3; echo "<br>"; //  modulo /resto

//reduccion de escritura de ecuaciones
$x = 4;
$x = $x + 1;
echo $x; echo "<br>";

$x += 1; // es lo mismo que $x = $x + 1;
echo $x; echo "<br>";

$y = 1;
$x = $y + 2;
$x += 2;
echo $x; echo "<br>";
echo '********** <br>';

$x = 4;
$x += 1; // es lo mismo que $x = $x + 1; asi se puede incrementar abreviado.
$x++; // es lo mismo que $x = $x + 1; incrementa solo en 1
echo $x; echo "<br>";
$x--;   //es lo mismo que $x = $x - 1;

echo '********** <br>';
$x = 3;
$y = $x ++; //primero asigna y luego opera.
echo "y= " . $y; echo "<br>";
echo "x= " . $x; echo "<br>";

echo '********** <br>';
$x = 3;
$y = ++$x; //primero opera y luego asigna.
echo "y= " . $y; echo "<br>";
echo "x= " . $x; echo "<br>";
?>