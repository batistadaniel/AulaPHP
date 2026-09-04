<?php

$peso = readline("Informe seu peso: ");
$altura = readline("Informe sua altura: ");

$imc = $peso / ($altura * $altura);

echo "IMC: " . $imc . "\n";

if ($imc < 18.5) {
    echo "Baixo peso";
} elseif ($imc <= 24.9) {
    echo "Peso normal";
} elseif ($imc <= 29.9) {
    echo "Sobrepeso";
} else {
    echo "Obesidade";
}

?>