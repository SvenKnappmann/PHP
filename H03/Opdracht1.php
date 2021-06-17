<?php

$array = array();

for ($i = 1; $i < 11; $i++) {
    if ($i < 10) {
        $array[$i] = "<img src='img/aap" . $i . ".jpg' alt='Monke'>";
        echo $array[$i];
    }
    else
    {
        echo "<img src='img/redhead_11.jpg' alt='Monke'>";
    }
}