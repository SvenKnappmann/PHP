<?php

$array = array();
$color = "green";

echo "<div style='text-align: center'>";
for ($i = 1; $i < 10; $i++) {
    $array[$i] = "<img src='img/aap" . $i . ".jpg' alt='Monke' style='border: solid " . $color . " 5px; width: 270px; height: 270px; margin-bottom: 5px'>";
    echo $array[$i];
    if ($i % 2 == 0) {
        $color = "green";
    } else {
        $color = "red";
    }
}
echo "</div>";