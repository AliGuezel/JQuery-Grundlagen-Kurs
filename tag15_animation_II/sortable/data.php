<?php

    $name    = $_POST['name'];
    $email   = $_POST['mail'];
    $bestell = $_POST['bestellung'];

    $order = json_decode($bestell);

    $data = 'Hallo '.$name.'<br/>';
    $data .= 'Vielen Dank für Ihre Bestellung.<br/>';
    echo $data;
    echo '<pre>';
    print_r($order);
    echo '</pre>';

