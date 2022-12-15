<html>

<head>
    <title>Un HTML Form con SELECT</title>
</head>

<body>
    <form action="ejemplo2_controller.php" method="POST">
        <strong>Nombre</strong>
        <input type="text" name="user">
        <strong>Direccion</strong>
        <textarea name="dire" cols="50" rows="5"></textarea>
        <p>
            <strong>Seleccione un producto</strong>
            <select name="producto">
                <option value="producto1">Producto 1</option>
                <option value="producto2">Producto 2</option>
                <option value="producto3">Producto 3</option>
                <option value="producto4">Producto 4</option>
                <option value="producto5">Producto 5</option>
            </select>
            <strong>Seleccione MAS de un producto</strong>
            <!-- agregar corchetes si es un array -->
            <select name="productos[]" multiple> 
                <option value="producto1">Producto 1</option>
                <option value="producto2">Producto 2</option>
                <option value="producto3">Producto 3</option>
                <option value="producto4">Producto 4</option>
                <option value="producto5">Producto 5</option>
            </select>
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php

?>