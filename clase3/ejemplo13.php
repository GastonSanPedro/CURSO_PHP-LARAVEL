<?php
// FECHAS
$tz = date_default_timezone_get();
echo $tz;
echo "<br>";
date_default_timezone_set('America/Argentina/Buenos_Aires');
$tz = date_default_timezone_get();
echo $tz;
echo "<br>";
// impresion de distintos formatos de fechas
// imprimir el dia de la semana del momento ... MONDAY.. CON LA LETRA L
echo date("l");
echo "<br>";

// imprimir ... Friday 2nd of July 2021 06:22:00 PM
echo date('l jS \of F Y h:i:s A');
echo "<br>";

// imprimir el dia de la semana que naci
echo "July 22, 1960 fue un ".date("l",mktime(0,0,0,7,22,1960)); // H, M, S, MES, D, ANO
echo "<br>";

// imprimir una fecha usando una CONSTANTE como parametro
echo date(DATE_RFC2822);
echo "<br>";
// formato tipo ISO-8601
echo date(DATE_ATOM, mktime(11,33,21,7,1,2000)); 
echo "<br>";
//
echo date('l \e\l jS');
echo "<br>";
?>
<?php
$hoy= date("d/m/y");
echo $hoy."<br>";
$hoy= date("D/M/Y");
echo $hoy."<br>";
$hoy=date("H:i:s");
echo $hoy."<br>";
$hoy= date("Y-m-d H:i");
echo $hoy."<br>";
$hoy= date("F j, Y, g:i a");
echo $hoy."<br>";

echo gettype($hoy)."<br>"; // asume que date es un string

// operacion con fecha
$mañana=date(DATE_RFC2822, mktime(0,0,0, date("m"),date("d")+1,date("Y")));
echo $mañana."<br>";
?>