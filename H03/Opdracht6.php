<?php

$zwemclubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];

echo "
<table>
  <tr>
    <th>Club</th>
    <th>Leden</th>
  </tr>
  ";

foreach ($zwemclubs as $zwemclub => $leden) {
    echo "
      <tr>
        <td>$zwemclub</td>
        <td>$leden</td>
        <td>
    ";
    for ($i = 5; $i <= $leden; $i += 5) {
        echo "
                <img src='img/StickManSwimming.png' alt='Swimmer' width='51px' height='47px'>
        ";
    }
    echo "
        </td>
      </tr>
    ";
}

echo "</table>";




























//JSC($zwemclubs);
//function JSC($input){
//    echo "<pre>";
//    print_r($input);
//    echo "</pre>";
//}