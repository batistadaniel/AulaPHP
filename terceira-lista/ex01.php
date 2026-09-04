<?php

$rendaMensal = readline("Qual é sua renda mensal? ");
$parcelaDesejada = readline("Qual é o valor da parcela desejada? ");

if ($parcelaDesejada > ($rendaMensal * 0.3)) {
    echo "Credito negado!";
} elseif ($parcelaDesejada > ($rendaMensal * 0.2) && ($parcelaDesejada <= ($rendaMensal * 0.3))) {
    echo "Em Análise";
} else {
    echo "Aprovado";
}

?>