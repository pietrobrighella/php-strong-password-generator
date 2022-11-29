<?php

/*
Milestone 1
1.Creare un form che invii in GET la lunghezza della password.
2.Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
3.Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/

if (isset($_GET['number'])) {
    $number = $_GET['number'];
}
function genPsw($number)
{

    $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $special = ['!', '?', '$', '?', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '[', '}', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '?', '/',];

    $psw = [];

    while (sizeof($psw) < $number) {
        $sort = rand(1, 3);
        if ($sort === 1) {
            $provv = array_rand($alphabet, 1);
            $psw[] = $alphabet[$provv];
        } elseif ($sort === 2) {
            $provv = array_rand($num, 1);
            $psw[] = $num[$provv];
        } else {
            $provv = array_rand($special, 1);
            $psw[] = $special[$provv];
        }
    }

    return $psw;
}

var_dump(genPsw(10))


    ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <form action="index.php" method="get" name="pswgenerator">
        <input type="number" id="number" name="number">
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>