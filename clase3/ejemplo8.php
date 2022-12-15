<?php 
//ejemplo para iterar por un array heterogeneo, sus elementos pueden ser de distinto tipo.
$vector = array('uno', 2, true, null, 5.4);
for($i = 0; $i < count($vector); $i++){
    echo $vector[$i] . "<br>";
}
echo "<br> ***************** <br>";

print_r($vector); //true = 1, false = 0, null = vacio print_r imprime el contenido del array
echo "<br> ***************** <br>";
var_dump($vector); //imprime ademas los formatos
echo "<br> ***************** <br>";

//array <key/value> ... formato JSON
echo "<br> ***************** <br>";

$vector = array('uno', 2, true, null, 5.4);
$a = array('a'=>'silla', 'b'=>'mesa', 'c'=>'plato');
print_r(array_keys($a)); //imprime las keys del array y su posicion
echo "<br> ***************** <br>";
print_r(array_values($a)); //imprime los valores del array y su posicion
echo "<br> ***************** <br>";
print_r(array_flip($a)); //imprime los valores y luego las claves del array
echo "<br> ***************** <br>";

//UNSHIFT, insertar al inicio, Push, insertar al final
echo 'Unshifting ... <br>';
$z = array('pelota', 'sombrilla', 'mate');
array_unshift($z, 'toalla'); //inserta al inicio
print_r($z);
echo "Pushing at the start... <br>";
array_push($z, 'churros'); //inserta al final
print_r($z);

echo "<br> ***************** <br>";

//Shift, elimina al inicio, Pop, elimina al final
echo 'Shifting ... <br>';
echo "Eliminando el primer elemento del array <br>";
echo array_shift($z) . "<br>"; //elimina al inicio
print_r($z);


echo "<br> ***************** <br>";
echo 'Popping ... <br>';
echo "Eliminando el ultimo elemento del array <br>";
echo array_pop($z) . "<br>"; //elimina al final
print_r($z);


?>