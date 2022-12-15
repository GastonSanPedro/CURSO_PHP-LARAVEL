<?php
echo "Este mensaje se va a mostrar siempre que aprete enviar <br>";

    //Validando
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["user"])){
            echo "El campo nombre es obligatorio";
        }else{
            $nombre = $_POST["user"];
            echo "Bievenido " .  $nombre . "<br>";
            echo "Tu direccion es: " . $_POST["dire"];
        }
    }
?>