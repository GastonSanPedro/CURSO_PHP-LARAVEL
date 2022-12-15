<html>

<head>
    <title>Ejemplo 3 variables</title>
</head>

<body>
    <!-- Asi se llama a PHP -->
    <?php
    //    esto es un parrafo
    echo "comentando php <br> y haciendo enter" . "<br>";
    ?>

    <?php
    // _frase = "hola mundo"; formato no valido.
    $frase1 = 'hola a todos';
    $nro = 5;
    $option = true;
    //Asume formato por 1era carga.
    echo getType($frase1) . "<br>";
    print getType($nro) . "<br>";
    echo getType($option) . "<br>";
    $nro1 = 5.5;
    echo getType($nro1) . "<br>";

    //casting ... conversion de tipos, lo paso a integer.
    $nro2 = 3.14;
    $nro3 = (int)$nro2;
    echo $nro3 . "<br>";

    //paso el tipo de dato a double de un entero.
    $nro4 = (float) $nro;
    echo "respuesta de tipo haciendo casting: " . getType($nro) . "<br>";
    echo $nro . "<br>";
    //de esta manera no lo cambiaria.

    //de esta manera si lo cambia.
    echo $nro . "<br>";
    settype($nro, "double"); //utilizo setType para cambiar el tipo de dato.
    echo "respuesta de tipo haciendo set type: " . getType($nro) . "<br>";
    ?>

    <?php
    $mensaje_es = "hola";
    $mensaje_en = "hello";
    $idioma = "en";

    $mensaje = "mensaje_" . $idioma;

    print "<br>";
    print $mensaje; //aca se muestra el valor literal ==> mensaje_en
    print "<br>";
    echo $$mensaje; //aca se muestra el valor de la variable ==> hello
    print "<br>";

    //es case sensitive
    $A = "chau";
    $a = "hola";
    $$a = "mundo";
    echo "$a ${$a}";
    print '<br>';
    echo $$a;
    print '<br>';
    print "$$a";
    print '<br>';
    ?>

    <?php
    echo '**********<br>';

    $nombre = "ana";
    $alias = &$nombre; //asigno la referencia de nombre a alias.
    $nombre = "pepe";
    $alias = "mi nombre es $alias"; //este esta referenciado.
    $alias2 = "mi nombre es gasti"; // este hace lo que dice
    echo $nombre . "<br>";
    echo $alias . "<br>";
    echo $alias2 . "<br>";

    // definicion de constantes
    const VALOR_MIN = 10;
    const VALOR_MAX = 20;
    echo VALOR_MAX;
    print "la constante es {VALOR_MAX}";
    print "la constante es VALOR_MAX";
    print "la constante es" . VALOR_MAX;
    ?>



</body>

</html>