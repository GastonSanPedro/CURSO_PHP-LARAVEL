<?php
//Este ejercicio imprime mi nombre y su longitud.
$first_name = "Gaston";
$last_name = "San Pedro";
function sayTheName($first_name, $last_name) {
    $nameSize = strlen($first_name) + strlen($last_name);
    echo "$first_name $last_name" . "<br>";
    echo " name size: " . $nameSize ;
}
sayTheName($first_name, $last_name);
?>


