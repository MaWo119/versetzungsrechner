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

#Versetzung berechnen

$list = $notenListe;
$error = 0;
$kfaecher = $notenListe;
$bestanden = "leer";

$kfaecher = array_splice($kfaecher, 0, -9);
$list = array_splice($list, 4);

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
        $kc6++;
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

#Check ob Schueler direkt durchgefallen ist (kein Ausgleich moeglich)
#if (($kc6 > 0) || ($gc6 > 1) || ($kc5 > 1) || (($kc5 > 0) && ($gc5 > 1)) || ($gc5 > 2)) {
if (false) {
    $bestanden = "nicht versetzt";
}
else {
    var_dump($list);
    echo "</br>";
    echo "</br>";
    var_dump(ausgleichen($list));
    echo "</br>";
}

function ausgleichen($l) {
    $c1 = 0;
    $c2 = 0;
    $c3 = 0;
    $c4 = 0;
    $c5 = 0;
    $c6 = 0;
    for ($i = 0; $i < sizeof($l); $i++) {
        if ($l[$i] == 1) {
            $c1++;
        }
        if ($l[$i] == 2) {
            $c2++;
        }
        if ($l[$i] == 3) {
            $c3++;
        }
        if ($l[$i] == 5) {
            $c5++;
        }
        if ($l[$i] == 6) {
            $c6++;
        }
    }
    if (($c6 > 0) && (($c2 >= 2) || ($c1 >= 1))) {
        unset($l[array_search(6, $l)]);
        if ($c2 >= 2) {
            unset($l[array_search(2, $l)]);
            unset($l[array_search(2, $l)]);
        }
        else {
            unset($l[array_search(2, $l)]);
        }
        #rekursiver Aufruf der FKT, bis nichts mehr ausgeglichen werden kann
        ausgleichen(array_values($l));
        }
    else if (($c5 > 0) && (($c3 >= 2) || ($c2 >= 1) || ($c1 >= 1))) {
        unset($l[array_search(5, $l)]);
        if ($c3 >= 2) {
            unset($l[array_search(3, $l)]);
            unset($l[array_search(3, $l)]);
        }
        else if ($c2 >= 1) {
            unset($l[array_search(2, $l)]);
        }
        else {
            unset($l[array_search(2, $l)]);
        }
        //rekursiver Aufruf der FKT, bis nichts mehr ausgeglichen werden kann
            ausgleichen($l);
        }
    else {
        return $l; 
    }
}
?>