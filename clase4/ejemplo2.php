<?php 
//pasaje por valor
//viaja el dato crudo.

function pasarXvalor($x) {
    $x++;
    return $x;
}
//pasaje por referencia
//viaja la direccion de memoria.
function pasarXreferencia(&$x) { // se le agrega la & para que sea por referencia
    $x++;
    return $x;
}

?>

<?php 
$valor = 3;
print pasarXvalor($valor);
echo "<br>";
echo "hola soy valor " . $valor; //no se porque imprime esto primero.
echo "<br>";
echo pasarXreferencia($valor);
echo "<br>";
echo "hola soy valor " . $valor;
echo "<br>";
?>