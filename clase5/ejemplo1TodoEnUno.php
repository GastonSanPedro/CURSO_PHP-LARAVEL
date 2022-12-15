<html>

<head>
    <title>Maquina de adivinar</title>
</head>

<body>
    <?php
    $numAdivinar = 42;
    $mensaje = "";
    if( !isset($_POST["num"])){ //NEGACION, no esta seteado
        $mensaje = "Bienvenidos a la maquina de adivinar!";
    }elseif($_POST["num"] == $numAdivinar){
        $mensaje = "Felicitaciones, adivinaste el numero!";
    }else {
        $mensaje = "No adivinaste el numero, intenta de nuevo!";
    }
    ?>

    <form action="ejemplo1TodoEnUno.php" method="POST">
        <input type="submit" value="Enviar">
        <input type="text" name="num" id="">
    </form>

    <?php echo "<h1>$mensaje</h1>"; ?>
</body>

</html>