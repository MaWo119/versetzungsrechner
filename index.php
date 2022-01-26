<!DOCTYPE html>
<html>
    <head>
        <title>Versetzungsrechner BGY</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Versetzungsrechner BGY</h1>
        <div id="form">
            <div id="Einleitung">
                <p>
                    Hallo und Herzlich Willkommen bei dem Versetzungsrechner für das berufliche Gymnasium der BBS Montabaur.
                <p>
                    Dieser Rechner ist für die Versetzung, der beiden Fachrichtungen "Wirtschaft" und "Gesundheit/Soziales", von der 11ten in die 12te Klasse ausgelegt.
                    Zur Verwendung müssen Sie erstmal Ihre Fachrichtung über die nachfolgenden Knöpfe wählen.
                    Anschließend werden Sie auf eine anderen Seite weitergeleitet, wo Sie Ihre Noten in den jeweiligen Fächer auswählen müssen.
                    Wenn dies geschehen ist können Sie noch optional Ihren Namen und Ihre Klassen angeben und auf "Auswerten" klicken.
                    Sie erhalten im Anschluss eine Benachrichtigung über Ihren Versetzungsstand (bestanden/nicht bestanden) und Ihren Notendurchschnitt.
                <p>
                    Ich wünsche Ihnen viel Erfolg.
            </div>
            <div id="Abstand"></div>
            <center>
                <table>
                    <tr>
                        <td>
                            <a href="./gesundheit.html">Gesundheit/ Soziales</a>
                        </td>
                        <td>
                            <a href="./wirtschaft.html">Wirtschaft</a>
                        </td>
                    </tr>
                </table>
                </br>
                <p></p>
                <?php
                $conn = mysqli_connect('localhost', 'admin', 'peterpeter', 'versetzungsrechner');
                $abfrage = "SELECT * FROM test ORDER BY test.id DESC LIMIT 10 ";
                $db_erg = mysqli_query($conn, $abfrage);
                if (!$db_erg) {
                    die('Ungültige Abfrage: ' . mysqli_error());
                }
                echo "<h2> Letzten 10 Ergebnisse </h2>";
                echo '<table border="1">';
                echo '<tr style="font-size: 20px;">';
                echo "<td>Notendurchschnitt</td>";
                echo "<td>Versetzung?</td>";
                echo "<td>Name</td>";
                echo "<td>Klasse</td>";
                echo "</tr>";
                while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $zeile['durchschnitt'] . "</td>";
                    echo "<td>" . $zeile['bestanden'] . "</td>";
                    echo "<td>" . $zeile['name'] . "</td>";
                    echo "<td>" . $zeile['klasse'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($db_erg);
                ?>
            </center>
        </div>
        <p>
        <div id="BildUnten">
            <img src="Bilder/Menschen.png" alt="Bild von Menschen - Quelle:https://pixabay.com/de/vectors/party-jubel-menschen-freude-1458869/">
            <div>
    </body>
</html>