<?php
require "Aircraft.php";
require "Airport.php";
require "Flight.php";

function addFour($x){
    $rez = $x + 4;
    echo "<br> $rez";
}

addFour(5);
addFour(8);

$manalidmasina = new Aircraft("Airbus", "A220-300", 120, 850 );
$destinacija = new Airport("RIX", 56.924, 23.971);
$galamerkis = new Airport("LAS", 66.2467, 25.17561);
$departureTime = new DateTime();
$flight = new Flight ("SA503", $destinacija, $galamerkis, $departureTime, $manalidmasina);

echo"<br>";
var_dump($manalidmasina);
echo"<br>";
echo"<br>";
var_dump($destinacija);
echo"<br>";
echo"<br>";
var_dump($flight);
echo"<br>";
echo $flight->getDistance();
?>