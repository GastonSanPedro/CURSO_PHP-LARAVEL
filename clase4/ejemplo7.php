<?php
$nombre = "Alejandra";

//Estas encriptaciones no tiene funcion de reversa.
//da una clave de 32 caracteres.
$nombreEncriptado = md5($nombre); //md5 es una función que encripta el string que le pasamos como parámetro y significa "message digest 5" 
echo $nombreEncriptado;

//da una clave de 40 caracteres.
$nombreEncriptado = sha1($nombre); //sha1 es una función que encripta el string que le pasamos como parámetro y significa "secure hash algorithm 1"
echo $nombreEncriptado;
?>