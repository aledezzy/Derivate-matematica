<!DOCTYPE html>
<html>
<head>
    <title>Risultato del calcolo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera il valore inviato dallo slider
        $valore = $_POST["valore"];

        // Calcola il risultato
        $risultato = 6000 / $valore;
        $txt = sprintf("%2f",$risultato);
        // Stampa il risultato
        echo "Il risultato della divisione di 6000 per $valore è:";
        echo "<br>";
        echo $txt;


    }
    ?>
</body>
</html>
