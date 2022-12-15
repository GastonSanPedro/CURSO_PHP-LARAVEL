<?php
//Este ejercicio compara los valores de dos variables y arroja un mensaje diferente segun el resultado de la comparacion.
$numberExample1 = 5;
$numberExample2 = 10;
 
echo ($numberExample1 === $numberExample2) ? "Son iguales" : "Son diferentes";
echo "<br>";
echo ($numberExample1 < $numberExample2) ? "Es menor" : "Es mayor";
echo "<br>";
echo ($numberExample1 > $numberExample2) ? "Es mayor" : "Es menor";
echo "<br>";
echo ($numberExample1 <= $numberExample2) ? "Es menor o igual" : "Es mayor o igual";
?>