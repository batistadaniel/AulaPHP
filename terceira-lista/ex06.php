<?php

$velocidade = readline("Informe a velocidade: ");

if ($velocidade <= 80) {
    echo "Sem multa";
} elseif ($velocidade <= 100) {
    echo "Multa Leve (R$ 130)";
} else {
    echo "Multa Grave (R$ 880)";
}

?>