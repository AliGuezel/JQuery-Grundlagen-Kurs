<?php

    $location = 'localhost';  // meineDomain.de | 123.222.45.67
    $user     = 'root';
    $password = '';
    $database = 'firma';

    $link = mysqli_connect($location, $user, $password, $database);
    mysqli_set_charset($link, 'utf8');

    $anfrage = "SELECT * FROM kunden";
    $ergebnis = mysqli_query($link, $anfrage);

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<kunden>';

    while( $ds = mysqli_fetch_assoc($ergebnis) ){
        $xml .= '<kunde>';
        $xml .= '<id>'.$ds['id'].'</id>';
        $xml .= '<anrede>'.$ds['anrede'].'</anrede>';
        $xml .= '<vorname>'.$ds['vorname'].'</vorname>';
        $xml .= '<nachname>'.$ds['nachname'].'</nachname>';
        $xml .= '<plz>'.$ds['plz'].'</plz>';
        $xml .= '<ort>'.$ds['ort'].'</ort>';
        $xml .= '<telefon>'.$ds['telefon'].'</telefon>';
        $xml .= '<email>'.$ds['email'].'</email>';
        $xml .= '</kunde>';
    }

    $xml .= '</kunden>';

    header('Content-Type:application/xml; charset=UTF-8');

    echo $xml;

    mysqli_close($link);

