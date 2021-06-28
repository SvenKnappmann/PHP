<?php
$emails = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
$sorry = true;
foreach ($emails as $key => $value) {
    if ($_POST['email'] == $key) {
        echo "Welkom";
    } else {
        if ($sorry) {
            echo "Sorry, geen toegang!";
            $sorry = false;
        }
    }
}