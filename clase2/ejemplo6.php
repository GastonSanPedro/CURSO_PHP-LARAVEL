<html>
    <head>
        <title>Hola mundo PHP</title>
    </head>
    <body>
        <?php 
        $mostrar= true;
        if($mostrar){
            echo "<table border='1'>";
            echo "<tr><td colspan='3'>";
            echo "el precio del dolar hoy es ";
            echo "</td></tr>";
            echo "<tr>";
            echo "<td>172</td>";
            echo "<td>100</td>";
            echo "<td>144</td>";
            echo "</tr>";
            echo "</table>";
        }

        $miVariable = null;
        $miVariable = "";
        $miVariable = 0;
        //$miVariable = empty/undefined/any no funcionan aca
        ?>
    </body>
</html>