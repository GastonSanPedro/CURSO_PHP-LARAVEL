<?php
//este ejercicio me dice los el tipo de dato de cada elemento del array.
$examples = array(1, true, "hola", null);
for($i = 0; $i < count($examples); $i++){
    echo getType($examples[$i])."<br>";
}
?>