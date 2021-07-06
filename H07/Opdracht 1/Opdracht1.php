<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROC-DEV-PHP</title>
</head>
<body>
<?php

if (isset($_SESSION["userId"]) && $_SESSION["userId"] === "true") {
    header("Location: ./Opdracht1part2.php");
}elseif (isset($_SESSION["noLogin"]) && $_SESSION["noLogin"] === "true") {
    echo "naam en wachtwoord komen niet voor in de database";
}
?>


<form action="Opdracht1part2.php" method="post">
    <label>
        <input required type="email" name="email"><br>
        <input required type="password" name="password"><br>
    </label>
    <input type="submit" name="submit">
</form>
</body>
</html>