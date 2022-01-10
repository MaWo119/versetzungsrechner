<?php

ini_set('display_errors', '1');
echo '<form method="post">';

$notenListe = array();
$summe = 0;

#Durchschnittsberechung

for ($i = 1; $i <= 13; $i++) {
    $id = "n" . (string) $i;
    array_push($notenListe, $_POST[$id]);
}

for ($i = 0; $i <= 12; $i++) {
    $summe = $summe + $notenListe[$i];
}

$durchschnitt = round($summe/13, 2);

print_r($durchschnitt);

#Versetzung berechnen

$list = $notenListe;
$error = 0;
$kfaecher = $notenListe;
$bestanden = "leer";

echo "</br>";
var_dump(array_splice($kfaecher, 0, -9));
echo "</br>";
var_dump(array_splice($list, 4));
echo "</br>";

$kc5 = 0;
$kc6 = 0;

$gc5 = 0;
$gc6 = 0;

#5en und 6en in Listen zählen

for ($i = 0; $i < sizeof($kfaecher); $i++) {
    if ($kfaecher[$i] == 5) {
        $kc5++;
    }
    if ($kfaecher[$i] == 6) {
        $kc6;
    }
}

for ($i = 0; $i < sizeof($list); $i++) {
    if ($list[$i] == 5) {
        $gc5++;
    }
    if ($list[$i] == 6) {
        $gc6++;
    }
}


?>