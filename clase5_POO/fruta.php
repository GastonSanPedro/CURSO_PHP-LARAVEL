<?php
// un objeto tipido llamado VALUE OBJECT
class Fruta{
//propiedades-atributos
    public $name;
    public $color;
    private $weight;

    // metodos-comportamiento
    // metodo constructor
    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "La fruta es destruida {$this->name}";
    }
  
    // los setters son de escritura
     function set_weight($n){
        $this->weight = $n;
    }
    function set_name($name){
        $this->name = $name;
    }

     function set_color($color){
        $this->color = $color;
    }
//los getters son de lectura
    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }

    function contar(){
        echo "contando fruta<br>";
    }
    protected function intro(){
        echo "estoy en intro a fruta<br>";
    }
}



?>