<?php 
class GoodBye{
    const LEAVING_MESSAGE = "gracias por aprender PHP";

    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }
}

echo GoodBye::LEAVING_MESSAGE;
echo "<br>";
$saludo = new GoodBye();
$saludo->byebye();

?>