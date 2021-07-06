<?php
session_start();

$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = 'phpschool';

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass);

$accounts = $dbh->query("SELECT * FROM account");

$loginResult = checkCorrectLogin($_POST['email'], $_POST['password'], $accounts);

if ($loginResult) {
    echo "Welkom<br>";
    $_SESSION["noLogin"] = "false";
    $_SESSION["userEmail"] = $loginResult["email"];
    $_SESSION["userId"] = $loginResult["id"];
    $_SESSION["userRole"] = $loginResult["rol"];
} else {
    header("Location: ./Opdracht1.php");
    $_SESSION["noLogin"] = "true";

}

if ($_SESSION["userRole"] === "admin") {
    echo "E-mail: ".$_SESSION["userEmail"]."<br>Rol: administrator<br>";
    echo "<a href='admin.php'>adminDocs</a><br>
            <br>
            <br>
            <a href='logout.php'>Log out</a>";
} else {
    echo "E-mail: ".$_SESSION["userEmail"]."<br>Rol: gebruiker<br>
            <br>
            <br>
            <br>
            <a href='logout.php'>Log out</a>";
}


function checkCorrectLogin($emailUser, $password, $accounts)
{
    foreach ($accounts as $account) {
        if ($account["email"] === $emailUser && $account["password"] == $password) {
            return $account;
        }
    }

    return null;
}