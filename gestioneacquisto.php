<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Acquisto</title>
</head>
<body style = "text-align: center">
    <?php
    
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $cf = $_POST["cf"];
    $data = $_POST["data"];
    $orario = $_POST["orario"];
    



      echo "<h1>LISTINO PREZZO BIGLIETTI</h1>
            <ul>
              <li>Curva: 30 euro</li>
              <li>Tribuna Centrale: 80 euro</li>
              <li>Tribuna d'onore: 120 euro</li>
            </ul>
            <h2>Dati acquirente:</h2>
            <p>Nome: " . $nome . "</p>
            <p>Cognome: " . $cognome . "</p>
            <p>Codice Fiscale: " . $cf . "</p>
            <p>Data: " . $data . "</p>
            <p>Cognome: " . $cognome . "</p>
            <p>Numero biglietti acquistati: " . $cognome . "</p>";


    ?>
</body>
</html>