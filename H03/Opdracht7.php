<?php

$kappersagenda = [
    "9.15" => "Mevr. Pietersen",
    "9.30" => "Mevr. Willems",
    "9.45" => "",
    "10.00" => "Mevr. Pietersen",
    "10.15" => "Mevr. Willems",
    "10.30" => "",
];


print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
print ("</ul>");