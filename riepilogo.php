<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $mail = $_GET["indirizzoMail"];

        echo "<h1>Dati inviati</h1>";
        echo "<table style='border: 2px, solid, black; border-collapse: collapse;'>";
        echo "<tr> <th style='border: 2px, solid, black; '>Nome</th> <th style='border: 2px, solid, black;'>Cognome</th> 
        <th style='border: 2px, solid, black;'>Indirizzo email</th></tr>";
        echo "<tr> <td style='border: 2px, solid, black; '>$nome</td> <td style='border: 2px, solid, black;'>$cognome</td>
        <td style='border: 2px, solid, black;'>$mail</td></tr>";
        echo "</table>";

    ?>
        
    </body>
</html>