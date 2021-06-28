<?php
$logins = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

checkCorrectLogin($_POST['email'], $_POST['password'], $logins);

function checkCorrectLogin($emailUser, $password, $logins){
    if(array_key_exists($emailUser, $logins) && $logins[$emailUser] === $password){
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang";
    }
}