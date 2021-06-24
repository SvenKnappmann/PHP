<?php
$emails = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
foreach ($emails as $key => $value) {
    if ($_POST['email'] == $key) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang!";
    }
}