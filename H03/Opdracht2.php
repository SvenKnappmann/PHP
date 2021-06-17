<?php

$star = array("*");
echo "<div style='width: 200px; text-align: center'>";
for ($i = 1; $i < 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo " * ";
    }
    echo "<br>";
}
echo "</div>";