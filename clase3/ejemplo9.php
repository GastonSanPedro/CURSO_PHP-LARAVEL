<?php 
//VECTORES O ARRAYS
//1er ejemplo

$arcoiris = array('rojo', 'naranja', 'amarillo', 'verde', 'azul', 'violeta');
echo $arcoiris[0] . "<br>";

//2do ejemplo
$arcoiris [] = 'rosa';
print_r($arcoiris);
echo "<br> ***************** <br>";

// Sobreescribir un valor

$arcoiris[0] = "turquesa";
print_r($arcoiris);

//carga de datos desordenada
$arcoiris[2] = "marron";
$arcoiris[0] = "negro";
$arcoiris[1] = "blanco";
print_r($arcoiris);
echo "<br> ***************** <br>";
//echo $arcoiris[7]; si es un elemento que no existe en el array nos da error
echo "<br> ***************** <br>";
?>