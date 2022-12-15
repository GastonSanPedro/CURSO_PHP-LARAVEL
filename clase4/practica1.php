<?php 
function calculateAge(){
    $curentYear = date("Y");
    for($i = 1; $i <= 5; $i++){
        $yearRandomOfBorn= rand(1900, $curentYear);
        $edad = $curentYear - $yearRandomOfBorn;
        echo "La persona $i tiene " . $edad . "<br>";
    }
}
calculateAge();
?>