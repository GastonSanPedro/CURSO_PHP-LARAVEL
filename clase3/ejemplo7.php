<?php 
// bucles, repeticion, iteracion
//1er ejemplo
//Wwhile = mientras, SE USA PRINCIPALMENTE CUANDO NO CONOZCO EL TOPE DE REPETICIONES
//si no cumple cierta condicion, no entra al while.

$cant = 1;
while ($cant <= 10) {
    echo $cant . " * 2 = " . $cant * 2 . "<br>";
    $cant++;
}
echo "<br> ***************** <br>";
//2do ejemplo
//si o si, se ejecuta al menos una vez, y luego se evalua la condicion
//do while = hacer mientras
$cant = 11;
do {
    echo $cant . " * 2 = " . $cant * 2 . "<br>";
    $cant++;
} while ($cant <= 10);

echo "<br> ***************** <br>";
//3er ejemplo SE USA PRINCIPALMENTE CUANDO CONOZCO EL TOPE DE REPETICIONES
//for = para
//for (inicializacion; condicion; incremento)
for ($i=1;$i<=10;$i++){
    echo "$i * 3 = " . ($i * 3) . "<br>";
}
// BREAK, salta al fin del for
$contar = -4; // declaro la variable iteradora y la inicializo
for (; $contar <= 10;$contar++){
    if($contar==0){
        break;
    } else {
        $temp = 4000 / $contar;
        echo "4000 / $contar es $temp <br>";
    }
}
// CONTINUE, salta a la cabecera del for
echo "*******************************<br>";
$contar = -3; // declaro la variable iteradora y la inicializo
for (; $contar <= 10;$contar++){
    if($contar==0){
        continue;
    } else {
        $temp = 2000 / $contar;
        echo "2000 / $contar es $temp <br>";
    }
}


echo "<br> ***************** <br>";
//4to ejemplo
//Bucles anidados
echo "<table border=1>";
for ($fila = 1; $fila <= 12; $fila++){
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++){
        echo "<td>" . $fila * $col . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br> ***************** <br>";

echo "<table border=1>";
for ($fila = 1; $fila <= 7; $fila++){
    echo "<tr>";
    for ($col = 1; $col <= 4; $col++){
        echo "<td>" . rand(1,10) . "</td>"; //rand = random, numero aleatorio entre 0 y 1 y lo multiplica por 10
    }
    echo "</tr>";
}
echo "</table>";
?>