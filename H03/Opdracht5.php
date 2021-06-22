<?php

$leeftijd = 88;
$bedrag = null;

if ($leeftijd > 12 && $leeftijd <= 65) {
    $bedrag = 10;
} elseif ($leeftijd < 3) {
    $bedrag = 0;
} else {
    $bedrag = 5;
}
echo $bedrag;