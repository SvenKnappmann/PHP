<?php
$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = 'phpschool';

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass);

$cursisten = $dbh->query("SELECT * FROM cursist");

// $cursist["naam"]
echo "<style>
.border{border: solid black 1px}
</style>";
echo "<table class='border'>";
echo "<tr>
        <th class='border'>cursistnr</th>
        <th class='border'>naam</th>
        <th class='border'>roepnaam</th>
        <th class='border'>straat</th>
        <th class='border'>postcode</th>
        <th class='border'>plaats</th>
        <th class='border'>geslacht</th>
        <th class='border'>geb_datum</th>
    </tr>";

foreach ($cursisten as $cursist) {
    echo "<tr>";
    echo "<td class='border'>" . $cursist['cursistnr'] . "</td>";
    echo "<td class='border'>" . $cursist['naam'] . "</td>";
    echo "<td class='border'>" . $cursist['roepnaam'] . "</td>";
    echo "<td class='border'>" . $cursist['straat'] . "</td>";
    echo "<td class='border'>" . $cursist['postcode'] . "</td>";
    echo "<td class='border'>" . $cursist['plaats'] . "</td>";
    echo "<td class='border'>" . $cursist['geslacht'] . "</td>";
    echo "<td class='border'>" . $cursist['geb_datum'] . "</td>";
    echo "</tr>";
}
echo "</table>";