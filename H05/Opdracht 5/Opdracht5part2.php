<?php
$emails = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
$sorry = true;
foreach ($emails as $key => $value) {
    if ($_POST['email'] == $key) {
        if ($_POST['password'] == $value) {
            echo "Welkom";
        }
    } else {
        if ($sorry) {
            echo "Sorry, geen toegang!";
            $sorry = false;
        }
    }
}
function checkLogin($key, $value) {

}