<?php
//Este ejercicio arroja un mensaje diferente segun la edad de la persona.
$age= 30;
if ($age >= 18 && $age <= 35) {
    echo 'Mensaje para JOVENES';
}else if($age < 18 && $age >= 1){
    echo 'Mensajes a los chicos';
}else{
    echo 'Mensaje Generico';
}
?>
