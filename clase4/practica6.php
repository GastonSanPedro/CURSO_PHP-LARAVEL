<?php 
//obtener la fecha de hoy y agregarle un dia
$fecha_actual = date("d-m-Y");
function addDayToday (){
    global $fecha_actual;
    return date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 
}
echo addDayToday();
?>