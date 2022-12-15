<?php 
function makeCoffe($tipo = "capuchino"){
    print "Haciendo una taza de $tipo";
}
echo makeCoffe();
echo "<br>";
echo makeCoffe("cafe con leche");
echo "<br>";
echo makeCoffe(null); //pisa el predeterminado y no le agrega nada.
echo "<br>";

function makeCoffe2($tipos = array("capuchino"), $marca = null){
    $aparato = is_null($marca) ? "uso de las manos" : $marca;
    return "Haciendo una taza de ".join(", ", $tipos)." con $aparato <br>";
}

echo makeCoffe2(array("expresso", "capuchino"), "Cabrales");
echo makeCoffe2()
?>

<?php 
function makeRicota($tipo="acida", $sabor){ //deberia ir primero el parametro sin valor por defecto
    return "hago ricota $tipo de $sabor" . "<br>";
}

function makeRicota1($sabor, $tipo="acida"){
    return "hago ricota $tipo de $sabor" . "<br>";
}

echo makeRicota("acida", "vainilla");
echo makeRicota1("vainilla");
?>

<?php
$name = "Gaston";
function getName(){
    global $name;
    return $name;
}
?>