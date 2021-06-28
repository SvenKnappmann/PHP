<?php
$emails = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

$account = false;
foreach ($emails as $key => $value) {
    if ($_POST['email'] == $key && $_POST['password'] == $value) {
        echo "Welkom";
        $account = true;
        break;
    }
}

if (!$account) {
    echo "Sorry, geen toegang";
}