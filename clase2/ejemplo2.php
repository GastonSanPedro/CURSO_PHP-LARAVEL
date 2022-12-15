<!-- Puedo usar php sin necesidad de poner html etc... -->

<?php
echo 'chau mundo' . "<br>";
?>
<?php
// _frase = "hola mundo"; formato no valido.
$frase1 = 'hola a todos';
$nro = 5;
$option = true;
//Asume formato por 1era carga.
echo getType($frase1) . "<br>";
print getType($nro) . "<br>";
echo getType($option);
?>