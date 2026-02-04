<?php

	$location = 'localhost';  // meineDomian.de | 123.222.66.78
	$user     = 'root';
	$password = '';
	$database = 'unesco';

	// Physikalische Verbindung zum Datenbankserver
	$link = mysqli_connect($location, $user, $password, $database);
	// Einstellen des Zeichensatz
	mysqli_set_charset($link, 'utf8');  // latin1

	$anfrage = "SELECT states, COUNT(*) AS num FROM data GROUP BY states";

	$ergebnis = mysqli_query($link, $anfrage);

	$json = [];
	while($ds = mysqli_fetch_assoc($ergebnis)){
		$json[] = $ds;
	}

	header('Content-Type:application/json; charset=UTF-8');

	echo json_encode($json);

?>
