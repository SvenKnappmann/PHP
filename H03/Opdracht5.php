<?php

$leeftijden = [10, 2, 65, 12];
$array = [4, 5,6 ,7,8];
showPrice($leeftijden);
showPrice($array);
function showPrice($ages){
    for ($i = 0; $i < count($ages); $i++) {
        echo calcPrice($ages[$i]);
        echo "<br>";
    }
}
function calcPrice($input)
{

    if ($input > 12 && $input <= 65) {
        $bedrag = 10;
    } elseif ($input < 3) {
        $bedrag = 0;
    } else {
        $bedrag = 5;
    }
    return $bedrag;
}





















































//return ($input > 12 && $input <= 65) ? 10 : ($input < 3 ? 0 : 5);