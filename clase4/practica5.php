<?php
$arrayExample = array("hola", 1, true);

// print($arrayExample);
function addElementToArray(&$array, $element){
    array_push($array, $element);
    return $array;
}

print_r(addElementToArray($arrayExample, "chau"));
echo "<br>";
print_r ($arrayExample);
?>