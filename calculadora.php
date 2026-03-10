<?php
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

if ($operacio == "s") {
    $resultat = $primerNumero + $segonNumero;
} else if ($operacio == "r") {
    $resultat = $primerNumero - $segonNumero;
} else if ($operacio == "m") {
    $resultat = $primerNumero * $segonNumero;
} else if ($operacio == "d") {
    if ($segonNumero != 0) {
        $resultat = $primerNumero / $segonNumero;
    } else {
        $resultat = "Error";
    }
}

echo $resultat;
?>
