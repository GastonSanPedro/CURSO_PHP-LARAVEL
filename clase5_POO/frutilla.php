<?php
class Frutilla extends Fruta{
public function enviarMensaje(){
        echo "soy una frutilla de color ";
        echo $this->color;
}
// overriding ... sobreejecucion ... agrandar o sobreescribir comportamiento
function contar(){
        parent::contar();
        echo "contando frutillas<br>";
        $this->intro(); // tiene visibilidad protected, lo veo
}
}


?>