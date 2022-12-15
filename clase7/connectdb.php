<?php

function conectar(){
    $usuario = "root";
    $pass = "1234";
    $bd = "cursoasap";
    $servidor = "localhost"; // 127.0.0.1

    $connect = mysqli_connect($servidor, $usuario, $pass, $bd);
    return $connect;
}

function desconectar($connect){
    mysqli_close($connect);
}

?>