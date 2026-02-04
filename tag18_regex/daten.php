<!DOCTYPE html>
<html lang="de">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tolle Webseite</title>
    </head>

    <body>

        <h2>Daten</h2>

        <?php

            $name  = $_POST['name'];
            $ort   = $_POST['ort'];
            $email = $_POST['email'];

            echo "Hallo $name aus $ort<br/>";
            echo "Deine Email lautet $email";

        ?>


    </body>

</html>