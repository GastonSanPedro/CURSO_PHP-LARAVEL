<?php 
//similar a fs.readfile
$archivo = fopen('people.txt', 'rb'); //r-read, b-begin //para que lo lea completo.

echo "<ul>";
// feof = file end of file
// fgets = file get string
for ($filas= fgets($archivo);!feof($archivo); $filas= fgets($archivo)) {
    $filas = trim($filas);
    $info = explode("|", $filas);

    echo "<li>mail to: " . $info[0] ." ".$info[1] . "</li>";
    //echo "<li>mail to: " . $filas . "</li>"; tambien funciona, pero de la otra manera queda mas segregado.
}
echo "</ul>";
fclose($archivo); //para que no quede abierto y no gaste recursos.
?>