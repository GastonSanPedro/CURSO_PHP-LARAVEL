<?php 
//string
//ejemplo1

$palabra = "jardineria";
echo $palabra[0];
echo "<br> ************* <br>";
//strlen sirve para contar la cantidad de caracteres de una cadena.
$largo = strlen($palabra);
echo $largo;
echo "<br> ************* <br>";
//ejemplo2
//Strpos sirve para buscar la posicion de una cadena.
$nombre = "Perez, Ana";
$posicion = strpos($nombre, ",");
echo $posicion;
echo "<br> ************* <br>";

//Substr sirve para extraer una parte de una cadena
$apellido = substr($nombre, 0, $posicion);
echo $apellido;
echo "<br> ************* <br>";

$nombre = substr($nombre, $posicion+1, strlen($nombre));
echo $nombre;
echo "<br> ************* <br>";

//ejemplo3
//TRIMMER ---> Podadora de espacios
//TRIM, LTRIM, RTRIM.

$frase = "       hola mundo, que tal           ";
print (" * " . $frase ."*". "<br>");
echo "*" . trim($frase) . "*" . "<br>"; //trim en ambos lados
echo "*" . ltrim($frase) . "*" . "<br>"; //trim izquierdo
echo "*" . rtrim($frase) . "*" . "<br>"; //trim derecho

echo "<br> ************* <br>";
//ejemplo4
//Reemplazar un texto por otro
echo str_replace("mundo", "gente", $frase);
echo "<br> ************* <br>";

//Concatenacion
$cadena = "Sitio copyright 2020";
$cadena .= " - Todos los derechos reservados"; // con el punto asi se lo concatena
echo $cadena;
echo "<br> ************* <br>";

//ejemplo5
//Conversion de mayusculas y minusculas
$dato = "ana perez";
echo strtolower($dato);
echo "<br> ************* <br>";
echo strtoupper($dato);
echo "<br> ************* <br>";
echo ucfirst($dato);
echo "<br> ************* <br>";
echo ucwords($dato);
echo "<br> ************* <br>";

//ejemplo6
//printf
$nro=543;
printf("Decimal: %d<br>",$nro);
printf("Binario: %b<br>",$nro);
printf("Octal: %o<br>",$nro);
printf("Double: %f<br>",$nro);
printf("HexaDecimal: %x<br>",$nro);
printf("String: %s<br>",$nro);


$rojo=244;
$verde=123;
$azul=87;

printf("#%X%X%X", $rojo, $verde, $azul);
echo "<br>";


// imprimir con precision decimal
printf("%.2f",5.343432434);
echo "<br>";

// imprimir con ceros a la izquierda
printf("%06d", 36);
echo "<br>";

?>

<?php 
//Tokeninzing  se utiliza para separar los datos
// token = cospe1
//se usa mucho en archivos CSV- comma separator view-

$test = "perro|gato|conejo|pajaro|pez";
$separator = "|";
$animal = strtok($test, $separator); //va separando por la coma

while(is_string($animal)){
    if($animal){
        echo $animal . "<br>";
    }
    $animal = strtok($separator);
}
echo "<br> ************* <br>";

//algo similar al TOKEN, ES EXPLODE

$fecha= "2020-12-31";
$separador = "-";
$fecha = explode($separador, $fecha);
for($i=0; $i<count($fecha); $i++){
    echo $fecha[$i] . "<br>";
}
echo "<br> ************* <br>";


?>