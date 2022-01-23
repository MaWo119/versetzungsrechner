<?php

ini_set('display_errors', '1');
echo '<form method="post">';

$notenListe = array();
$summe = 0;

#Durchschnittsberechung

for ($i = 1; $i <= 12; $i++) {
    $id = "n" . (string) $i;
    array_push($notenListe, $_POST[$id]);
}

for ($i = 0; $i <= 11; $i++) {
    $summe = $summe + $notenListe[$i];
}

$durchschnitt = round($summe / 12, 2);

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
if (($kc6 > 0) || ($gc6 > 1) || ($kc5 > 1) || (($kc5 > 0) && ($gc5 > 1)) || ($gc5 > 2)) {
#if (false) {
    $bestanden = "nicht versetzt";
} else {
    //Noten ggf. ausgleichen lassen mithilfe einer Funktion
    $list = ausgleichen($list);
    $kfaecher = ausgleichen($kfaecher);
    //5en und 6en Zaehlvariablen zuruecksetzen
    $kc5 = 0;
    $kc6 = 0;
    //erneut zaehlen
    for ($i = 0; $i < sizeof($kfaecher); $i++) {
        if ($kfaecher[$i] == 5) {
            $kc5++;
        }
        if ($kfaecher[$i] == 6) {
            $kc6++;
        }
    }
    //Noten mit denen ausgeglichen werden kann aus der Grundfaecher Liste entfehrnen
    if ($kc5 == 0 && $kc6 == 0) {

        while (array_search(1, $list) !== false) {
            unset($list[array_search(1, $list)]);
        }

        while (array_search(2, $list) !== false) {
            unset($list[array_search(2, $list)]);
        }

        while (array_search(3, $list) !== false) {
            unset($list[array_search(3, $list)]);
        }

        //Kern- und Grundfaecher mergen
        $merged = array_merge($kfaecher, $list);
        $merged = ausgleichen($merged);

        $mc5 = 0;
        $mc6 = 0;
        //Noten zaehlen
        for ($i = 0; $i < sizeof($merged); $i++) {
            if ($merged[$i] == 5) {
                $kc5++;
            }
            if ($merged[$i] == 6) {
                $kc6++;
            }
        }
        //Check ob Schueler versetzt wird oder nicht
        if ($mc5 < 2 && $mc6 === 0) {
            $bestanden = "versetzt";
        } else {
            $bestanden = "nicht versetzt";
        }
    } else {
        $bestanden = "nicht versetzt";
    }
}

function ausgleichen($l) {
    for ($z = 0; $z < sizeof($l); $z++) {
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
            } else {
                unset($l[array_search(2, $l)]);
            }
            #rekursiver Aufruf der FKT, bis nichts mehr ausgeglichen werden kann
            $l = array_values($l);
        } else if (($c5 > 0) && (($c3 >= 2) || ($c2 >= 1) || ($c1 >= 1))) {
            unset($l[array_search(5, $l)]);
            if ($c3 >= 2) {
                unset($l[array_search(3, $l)]);
                unset($l[array_search(3, $l)]);
            } else if ($c2 >= 1) {
                unset($l[array_search(2, $l)]);
            } else {
                unset($l[array_search(2, $l)]);
            }
            //rekursiver Aufruf der FKT, bis nichts mehr ausgeglichen werden kann
            $l = array_values($l);
        } else {
            return $l;
        }
    }
}

#Name und Klasse einlesen

$name = $_POST["Name"];
$klasse = $_POST["Klasse"];

if ($name == NULL) {
    $name = "anonym";
}

if ($klasse == NULL) {
    $klasse = "anonym";
}


echo $durchschnitt; //float
echo $bestanden;    //string
echo $name;         //string
echo $klasse;       //string

?>