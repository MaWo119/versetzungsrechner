<?php
	//Parameter für Verbindung zur Datenbank
	define ('MYSQL_HOST', 'localhost');//Wo läuft die DB?
	define ('MYSQL_USER', 'dbadmin');//Welcher User stellt die Verbindung her?
	define ('MYSQL_PASSWORD', '');//Welches Passwort soll verwendet werden?
	define ('MYSQL_DB','versetzungsrechner');//Welche Datenbank soll verwendet werden?
?>

<?php
	if (isset($_POST['submit'])) //Wird bei klicken auf Button ausgeführt
	{
		$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);//Verbindung zur Datenbank herstellen

		$sqlquery1 = "";//SQL Query in Variable speichern
		$sqlquery1 .= "";//weiteren Teil an die Query anhängen
		
		echo $sql;

		mysql_query($sqlquery1);//Query an Server senden
		mysql_close($db);//Verbindung mit Datenbank schließen
	}
?>
