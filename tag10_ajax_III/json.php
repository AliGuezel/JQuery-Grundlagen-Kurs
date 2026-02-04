<?php

    $location = 'localhost'; // meineDomain.de | 123.222.34.56
    $user     = 'root';
    $password = '';
    $database = 'firma';
    
    $link = mysqli_connect($location, $user, $password, $database);
    mysqli_set_charset($link, 'utf8');

    $anfrage = "SELECT anrede, vorname, nachname, plz, ort FROM kunden";
    $ergebnis = mysqli_query($link, $anfrage);

    $json = [];
    while( $ds = mysqli_fetch_assoc($ergebnis) ){
        $json[] = $ds;
    }

    header('Content-Type:application/json; charset=UTF-8');

    echo json_encode($json);

    mysqli_close($link);
