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

echo "<br>";

if(!empty($_REQUEST["producto"])){
    echo "El producto seleccionado es: " . $_REQUEST["producto"];
}else{ 
    echo "No selecciono ningun producto";
}

echo "<br>";

if(!empty($_REQUEST["productos"])){
    echo "Los productos seleccionados son: <br>";
    foreach($_REQUEST["productos"] as $producto){
        echo "<li>" . $producto . "</li>";
    }
    echo "</ul>";
}else{ 
    echo "No selecciono ningun producto";
}
?>