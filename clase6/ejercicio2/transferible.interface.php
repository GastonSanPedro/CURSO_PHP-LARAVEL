<?php
interface ITransferible{
    public function depositar($cantidad);
    public function extraer($cantidad);
    public function mover($cantidad, $nroCta);
}
?>

