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
    $numBiglietti = $_POST["numBiglietti"];
    $posto = $_POST["settore"];
    $sconto = $_POST["sconto"];

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
            <p>Numero biglietti acquistati: " . $numBiglietti + 1 . "</p>
            <ul>";

            for ($i=0; $i<$numBiglietti; $i++){
              $nominativo = "cfAggiuntivo" . ($i+1);
              $cfAgg = $_POST[$nominativo];
              echo "<li>" . $cfAgg .  "</li>";
            }

            echo "</ul>";

            if ($posto == "1"){
              $totale = 30;
            }else if ($posto == "2"){
              $totale = 80;
            }else{
              $totale = 120;
            }

            if ($sconto=="FIRENZE5"){
              $totale = $totale - ($totale*0.05);
            }else if ($sconto != null){
                echo "<p style= 'color: red'>Codice inesistente</p>";
            }

            echo "<p>Totale: " . $totale . " euro </p>";


    ?>
</body>
</html>