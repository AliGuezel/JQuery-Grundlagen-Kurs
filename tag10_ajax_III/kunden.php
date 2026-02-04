<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Tolle Webseite</title>
	</head>
	
	<body>
	
		<h2>Firma</h2>

		<?php

			$location  = 'localhost';  // meineDomain.de | 123.222.56.78
			$user      = 'root';
			$password  = '';
			$database  = 'firma';

			// Physikalische Verbindung zur Datenbank
			$link = mysqli_connect($location, $user, $password, $database);
			// Einstellen des Zeichensatzes
			mysqli_set_charset($link, 'utf8');

			$anfrage = "SELECT * FROM kunden";
			$ergebnis = mysqli_query($link, $anfrage);

			$html = '<table border="1"';

			while( $ds = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$ds['anrede'].'</td>';
				$html .= '<td>'.$ds['vorname'].'</td>';
				$html .= '<td>'.$ds['nachname'].'</td>';
				$html .= '<td>'.$ds['plz'].'</td>';
				$html .= '<td>'.$ds['ort'].'</td>';
				$html .= '<td>'.$ds['telefon'].'</td>';
				$html .= '<td>'.$ds['email'].'</td>';
				$html .= '</tr>';
			}

			$html .= '</table>';

			echo $html;

			// Beenden der physikalischen Verbindung
			mysqli_close($link);

		?>

		<h3>Ende der Webseite</h3>


	</body>

</html>