<?php
include 'fruta.php';
include 'frutilla.php';
// NEW es el creador de INSTANCIAS
$apple = new Fruta('frutilla');
$banana = new Fruta('cereza');
$cereza = new Fruta('cereza');
$apple->set_name('Manzana');
$banana->set_name('banana');

$apple->set_weight(8);
$apple->set_color('verde');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $cereza->get_name();
echo "<br>";
//$banana->__destruct(); 
$frutilla = new Frutilla('frutilla');
$frutilla->set_color('rojo');
$frutilla->enviarMensaje();
echo "<br>";
$frutilla->contar();
echo "<br>";


?>