<?php 
//ordenamiento

$z = array(3, 2, 5, 6, 1);
sort($z);
print_r($z);
echo "<br> ***************** <br>";

//ordenamiento en key => value
echo "<br> ***************** <br>";

$a = array("a" => 'mapa', "c" => 'pala', "b" => 'tiburon', "d" => 'aero');
print_r($a);

echo "<br> ***************** <br>";

asort($a); //ordenar por valores sin pisar las keys
print_r($a);

echo "<br> ***************** <br>";
//ksort ordenar por keys alfabeticamente
ksort($a);
print_r($a);

echo "<br> ***************** <br>";

print array_search('tiburon', $a); //busca el valor y devuelve la key

echo "<br> ***************** <br>";


?>