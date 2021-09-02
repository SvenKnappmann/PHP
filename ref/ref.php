<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reflectie</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h2>Jaar 2</h2>
<table>
    <tr>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<th>Week " . $i . "</th>";
        }
        ?>
    </tr>
    <tr>
        <td>niks</td>
        <?php
        for ($i = 0; $i < 2; $i++) {
            echo "<td>php</td>";
        }
        for ($i = 0; $i < 4; $i++) {
            echo "<td>datab.</td>";
        }
        for ($i = 0; $i < 5; $i++) {
            echo "<td>Fullsta.</td>";
        }
        for ($i = 0; $i < 1; $i++) {
            echo "<td>protfolio</td>";
        }
        for ($i = 0; $i < 2; $i++) {
            echo "<td>sta. zoe.</td>";
        }
        for ($i = 0; $i < 5; $i++) {
            echo "<td>BPV1</td>";
        }
        ?>
    </tr>
</table>
<br>
<table>
    <tr>
        <?php
        for ($i = 21; $i <= 40; $i++) {
            echo "<th>Week " . $i . "</th>";
        }
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 0; $i < 15; $i++) {
            echo "<td>BPV1</td>";
        }
        for ($i = 0; $i < 2; $i++) {
            echo "<td>D.V.G.</td>";
        }
        for ($i = 0; $i < 3; $i++) {
            echo "<td>onderne.</td>";
        }
        ?>
    </tr>
</table>
<h2>Jaar 3</h2>
<table>
    <tr>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<th>Week " . $i . "</th>";
        }
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 0; $i < 2; $i++) {
            echo "<td>onderne.</td>";
        }
        for ($i = 0; $i < 2; $i++) {
            echo "<td>sta. zoe.</td>";
        }
        for ($i = 0; $i < 16; $i++) {
            echo "<td>BPV2</td>";
        }
        ?>
    </tr>
</table>
<br>
<table>
    <tr>
        <?php
        for ($i = 21; $i <= 40; $i++) {
            echo "<th>Week " . $i . "</th>";
        }
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 0; $i < 4; $i++) {
            echo "<td>BPV2</td>";
        }
        for ($i = 0; $i < 1; $i++) {
            echo "<td>mobile</td>";
        }
        for ($i = 0; $i < 13; $i++) {
            echo "<td>ber. exa.</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>