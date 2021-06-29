<?php
//$logins = [
//    "piet@worldonline.nl" => "doetje123",
//    "klaas@carpets.nl" => "snoepje777",
//    "truushendriks@wegweg.nl" => "arkiearkie201"
//];

$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = 'phpschool';

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass);

$accounts = $dbh->query("SELECT * FROM account");

$loginResult = checkCorrectLogin($_POST['email'], $_POST['password'], $accounts);

if ($loginResult) {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang";
}

function checkCorrectLogin($emailUser, $password, $accounts) {
    foreach ($accounts as $account) {
        if ($account["email"] === $emailUser && $account["password"] == $password) {
            return true;
        }
    }

    return false;
}