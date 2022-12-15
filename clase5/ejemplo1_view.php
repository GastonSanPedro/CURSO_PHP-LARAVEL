<html>
    <head>
        <title>Un simple HTML form</title>
    </head>
    <body>
        <form action="ejemplo1_controller.php" method="POST">
         <strong>Nombre</strong>   
        <input type="text" name="user">
        <strong>Direccion</strong>
        <textarea name="dire" cols="50" rows="5"></textarea>
        <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php 

?>