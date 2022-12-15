<?php 
$archivo = fopen('platos.csv', 'rb'); //r-read, b-begin //para que lo lea completo.

echo "<table border='1'>";
echo "<th>Plato</th>";
echo "<th>Precio</th>";
echo "<th>Cantidad</th>";

while(!feof($archivo)){ //no sea el fin del archivo
    //$filas = fgets($archivo); nose usa este sino que tiene una funciona propia
    $filas = fgetcsv($archivo, 1024); //para que lo lea completo.
    echo "<tr>";
    echo "<td>" . $filas[0] . "</td>";
    echo "<td>" . $filas[1] . "</td>";
    echo "<td>" . $filas[2] . "</td>";
    echo "</tr>";
}
echo "</table>";
fclose($archivo); //para que no quede abierto y no gaste recursos.
?>