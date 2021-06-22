<?php
$celsius = 2;
$divide = 3;
$reverse = "Hello world!";
$answer = isDividableBy3($divide);



convertToFarenheit($celsius);
echo "<br>";

if ($answer) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";
reverseString($reverse);


function convertToFarenheit($celsius) {
    $farenheit =$celsius * 1.8 + 32 ;
    print $farenheit;
}
function isDividableBy3($divideInFunction) {
    if ($divideInFunction % 3 == 0) {
        return true;
    }
    return false;
}
function reverseString($reverse) {
    echo strrev($reverse);
}