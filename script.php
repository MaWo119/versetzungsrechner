<?php

ini_set('display_errors', '1');
echo '<form method="post">';

$notenListe = array();
$summe = 0;

for ($i = 1; $i <= 13; $i++) {
    $id = "n" . (string) $i;
    array_push($notenListe, $_POST[$id]);
}

for ($i = 0; $i <= 12; $i++) {
    $summe = $summe + $notenListe[$i];
}

$durchschnitt = $summe/13;

print_r($summe);
print_r(round($durchschnitt,2));
print_r($notenListe);
?>