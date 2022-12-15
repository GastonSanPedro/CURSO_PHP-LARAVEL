<?php
// crear un array de tipo asociativo
// manejamos KEY => VALUE
//HASH TABLE    

$personaje = array(
    "nombre" => "Gandalf",
    "raza" => "Mago",
    "arma" => "Baston",
    "vida" => 100,
    "ataque" => 50,
);
print_r($personaje);
echo "<br> ***************** <br>";

$personajesLordOfRings = array(
    array(
    "nombre" => "Gandalf",
    "raza" => "Mago",
    "arma" => "Baston",
    "vida" => 100,
    "ataque" => 50,
), array(
    "nombre" => "Legolas",
    "raza" => "Elfo",
    "arma" => "Arco",
    "vida" => 100,
    "ataque" => 50,
), array(
    "nombre" => "Gimli",
    "raza" => "Enano",
    "arma" => "Hacha",
    "vida" => 100,
    "ataque" => 50,
), array(
    "nombre" => "Aragorn",
    "raza" => "Humano",
    "arma" => "Espada",
    "vida" => 100,
    "ataque" => 50,
), array(
    "nombre" => "Frodo",
    "raza" => "Hobbit",
    "arma" => "Daga",
    "vida" => 100,
    "ataque" => 50,
));

print_r($personajesLordOfRings);
echo "<br> ***************** <br>";

//OTRA FORMA DE IMPRIMIR UN ARRAY
foreach($personajesLordOfRings as $key => $value){
    print_r($personajesLordOfRings[$key]);
    echo "<br> ------ <br>";
}

echo "<br> ***************** <br>";
?>