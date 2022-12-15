<?php 

//ejercicio 1
//Como no tiene return, es una funcion de tipo RUTINA, de tipo VOID, no tienen retorno.

function showName($titulo = "Sr"){
    print "Estimado $titulo ";
}

showName();
echo "<br>";
showName("Ing");
echo "<br>";


function showValidName($nombre, $titulo = "Sra"){
    print "Estimado $titulo $nombre: ";
}

showValidName("Alejandra");
echo "<br>";
showValidName("Alejandra", "Prof");
?>