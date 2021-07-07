//XOR Marke Eigenbau
function selfXOR(a,b) {
    return (a || b) && !(a && b);
}

function pruefen() {

    //Eingaben in Variablen übertragen

    var z = document.getElementById(1); //z = Zwischenspeicher
    var kf1 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(2);
    var kf2 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(3);
    var kf3 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(4);
    var kf4 = parseInt(z.options[z.selectedIndex].value, 10);

    //Grundfächer in Variablen schreiben
    var z = document.getElementById(5);
    var gf1 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(6);
    var gf2 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(7);
    var gf3 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(8);
    var gf4 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(9);
    var gf5 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(10);
    var gf6 = parseInt(z.options[z.selectedIndex].value, 10);

    var z = document.getElementById(11);
    var gf7 = parseInt(z.options[z.selectedIndex].value, 10);

    //Zusätzliche Fächer
    var z = document.getElementById(12);
    var gf8 = parseInt(z.options[z.selectedIndex].value, 10);


    //---------------------------//

    /*Berechnungen*/
    var sum = parseInt(0, 10);
    sum = kf1+kf2+kf3+kf4+gf1+gf2+gf3+gf4+gf5+gf6+gf7+gf8; //Summe berechnen

    var ds = sum / 12; //Durchschnitt berechnen

    /*Vergleiche*/

    if (
            ( // 6 in KF
                kf1===6 || kf2===6 || kf3===6 || kf4===6
            ) ||
            ( // 2x 5 in GF
                (kf1===5 && (kf2===5 || kf3===5 || kf4===5)) ||
                (kf2===5 && (kf3===5 || kf4===5)) ||
                (kf3===5 && kf4===5)
            ) ||
            (// 2x 6 in GF
                (gf1===6 && (gf2===6 || gf3===6 || gf4===6 || gf5===6 || gf6===6 || gf7===6 || gf8===6)) ||
                (gf2===6 && (gf3===6 || gf4===6 || gf5===6 || gf6===6 || gf7===6 || gf8===6)) ||
                (gf3===6 && (gf4===6 || gf5===6 || gf6===6 || gf7===6 || gf8===6)) ||
                (gf4===6 && (gf5===6 || gf6===6 || gf7===6 || gf8===6)) ||
                (gf5===6 && (gf6===6 || gf7===6 || gf8===6)) ||
                (gf6===6 && (gf7===6 || gf8===6)) ||
                (gf7===6 && gf8===6)
            ) ||
            (//5 in KF und 2x 5 in GF
                (
                    kf1===5 || kf2===5 || kf3===5 || kf4===5
                ) && (
                    (gf1===5 && (gf2===5 || gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                    (gf2===5 && (gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                    (gf3===5 && (gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                    (gf4===5 && (gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                    (gf5===5 && (gf6===5 || gf7===5 || gf8===5)) ||
                    (gf6===5 && (gf7===5 || gf8===5)) ||
                    (gf7===5 && gf8===5)
                )
            ) ||
            (//3x 5 in GF
                (gf1===5 && gf2===5 && (gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf1===5 && gf3===5 && (gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf1===5 && gf4===5 && (gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf1===5 && gf5===5 && (gf6===5 || gf7===5 || gf8===5)) ||
                (gf1===5 && gf6===5 && (gf7===5 || gf8===5)) ||
                (gf1===5 && gf7===5 && gf8===5) ||

                (gf2===5 && gf3===5 && (gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf2===5 && gf4===5 && (gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf2===5 && gf5===5 && (gf6===5 || gf7===5 || gf8===5)) ||
                (gf2===5 && gf6===5 && (gf7===5 || gf8===5)) ||
                (gf2===5 && gf7===5 && gf8===5) ||

                (gf3===5 && gf4===5 && (gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf3===5 && gf5===5 && (gf6===5 || gf7===5 || gf8===5)) ||
                (gf3===5 && gf6===5 && (gf7===5 || gf8===5)) ||
                (gf3===5 && gf7===5 && gf8===5) ||

                (gf4===5 && gf5===5 && (gf6===5 || gf7===5 || gf8===5)) ||
                (gf4===5 && gf6===5 && (gf7===5 || gf8===5)) ||
                (gf4===5 && gf7===5 && gf8===5) ||

                (gf5===5 && gf6===5 && (gf7===5 || gf8===5)) ||
                (gf5===5 && gf7===5 && gf8===5) ||

                (gf6===5 && gf7===5 && gf8===5)
            )
        ) {
            alert("Versetzung nicht möglich!\n\nIhr Durchschnitt ist: " + ds);
        }
        else if (
            ( //5 in einem KF
                selfXOR( selfXOR( selfXOR( kf1===5,kf2===5 ), kf3===5), kf4===5)
            ) ||
            ( //5 in einem KF und einem GF
                (selfXOR(selfXOR(selfXOR(kf1===5,kf2===5), kf3===5), kf4===5)) &&
                (selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(gf1===5, gf2===5), gf3===5), gf4===5), gf5===5), gf6===5), gf7===5), gf8===5))
            ) ||
            ( //5 in KF und 6 in GF
                (selfXOR(selfXOR(selfXOR(kf1===5,kf2===5), kf3===5), kf4===5)) &&
                (selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(gf1===6, gf2===6), gf3===6), gf4===6), gf5===6), gf6===6), gf7===6), gf8===6))
            ) ||
            ( //6 in GF
                selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(gf1===6, gf2===6), gf3===6), gf4===6), gf5===6), gf6===6), gf7===6), gf8===6)
            ) ||
            (// 2x 5 in GF
                (gf1===5 && (gf2===5 || gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf2===5 && (gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf3===5 && (gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf4===5 && (gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf5===5 && (gf6===5 || gf7===5 || gf8===5)) ||
                (gf6===5 && (gf7===5 || gf8===5)) ||
                (gf7===5 && gf8===5)
            ) ||
            ( //5 & 6 in GF an beliebiger Stelle
                (gf1===6 && (gf2===5 || gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf2===6 && (gf1===5 || gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf3===6 && (gf1===5 || gf2===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf4===6 && (gf1===5 || gf2===5 || gf3===5 || gf5===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf5===6 && (gf1===5 || gf2===5 || gf3===5 || gf4===5 || gf6===5 || gf7===5 || gf8===5)) ||
                (gf6===6 && (gf1===5 || gf2===5 || gf3===5 || gf4===5 || gf5===5 || gf7===5 || gf8===5)) ||
                (gf7===6 && (gf1===5 || gf2===5 || gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf8===5)) ||
                (gf8===5 && (gf1===5 || gf2===5 || gf3===5 || gf4===5 || gf5===5 || gf6===5 || gf7===5))
            )
        ) {
            alert("Versetzung mit Ausgleich möglich\n\nIhr Durchschnitt ist: "+ ds);
    }
    else if (
        ( //alle fächer besser als 4
            kf1<=4 && kf2<=4 && kf3<=4 && kf4<=4 &&
            gf1<=4 && gf2<=4 && gf3<=4 && gf4<=4 && gf5<=4 && gf6<=4 && gf7<=4
        ) ||
        ( //eine 5 im GF
            selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(selfXOR(gf1, gf2), gf3), gf4), gf5), gf6), gf7)
        )
    ) {
        alert("Sie wurden versetzt!\n\nIhr Durchschnitt ist: " + ds);
    }
}
