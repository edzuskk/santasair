<?php
require "Aircraft.php";
require "Airport.php";

function addFour($x){
    $rez = $x + 4;
    echo "<br> $rez";
}

addFour(5);
addFour(8);

$manalidmasina = new Aircraft("Airbus", "A220-300", 120, 850 );
var_dump($manalidmasina);

$destinacija = new Airport("RIX", 56.924, 23.971);
var_dump($destinacija);
?>