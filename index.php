<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROC-DEV-PHP</title>
</head>
<body>
<h1>PHP</h1>
<h3>Hoofdstuk.01</h3>
<a href="H01/Index.php">Opdracht.01</a>
<h3>Hoofdstuk.02</h3>
<?php
for ($i = 1; $i <= 4; $i++) {
    echo "<a href='H02/Opdracht" . $i . ".php'>Opdracht.0$i</a><br>";
}
?>
<h3>Hoofdstuk.03</h3>
<?php
for ($i = 1; $i <= 7; $i++) {
    echo "<a href='H03/Opdracht" . $i . ".php'>Opdracht.0$i</a><br>";
}
?>
<h3>Hoofdstuk.04</h3>
<a href="H04/Opdracht.php">Opdracht.01</a>
<h3>Hoofdstuk.05</h3><?php
for ($i = 1; $i <= 5; $i++) {
    echo "<a href='H05/Opdracht%20" . $i . "/Opdracht" . $i . ".html'>Opdracht.0$i</a><br>";
}
?>
<h3>Hoofdstuk.06</h3>
<a href="H06/Opdracht%201/Opdracht1.php">Opdracht.01</a><br>
<a href="H06/Opdracht%202/Opdracht2.html">Opdracht.02</a><br>
<h3>Hoofdstuk.07</h3>
<a href="H07/Opdracht%201/Opdracht1.php">Opdracht.01</a><br>
<h2>Verdieping</h2>
<h3>Hoofdstuk.08</h3>
<a href="H08/Opdracht%201/index.php">Opdracht.01</a>
<h1>Reflectie</h1>
<a href="ref/ref.php">001</a>
</body>
</html>