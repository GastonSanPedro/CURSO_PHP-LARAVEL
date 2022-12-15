<?php
require 'connectdb.php';

$connect = conectar();

if($connect){
    print "<h1>Conexion Exitosa</h1>";
// ejemplo 
$instruccion="Select * from jugador";
$consulta=mysqli_query($connect,$instruccion) or die ("Fallo en la consulta");
$filas=mysqli_num_rows($consulta);

    if ($filas == 0){
        print ("no hay jugadores <br>");
    }else {
        while ($fila=mysqli_fetch_array($consulta)){
            print "<tr>
               <td>".$fila['idjugador']."</td>
               <td>".$fila['nombre']."</td>
               <td>".$fila['camiseta']."</td>
               <td>".$fila['club']."</td>
               </tr>";
            echo "<br>";
        }

    }
 desconectar($connect);

} else {
    print "la conexion NO SE PUDO realizar <br>";
}


?>