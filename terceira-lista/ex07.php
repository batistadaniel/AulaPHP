<?php

$numero1 = readline("Informe o primeiro número: ");
$numero2 = readline("Informe o segundo número: ");
$operacao = readline("Informe a operação (+, -, *, /): ");

if ($operacao == "+") {
    echo "Resultado: " . ($numero1 + $numero2);
} elseif ($operacao == "-") {
    echo "Resultado: " . ($numero1 - $numero2);
} elseif ($operacao == "*") {
    echo "Resultado: " . ($numero1 * $numero2);
} elseif ($operacao == "/") {
    if ($numero2 == 0) {
        echo "Erro: divisão por zero";
    } else {
        echo "Resultado: " . ($numero1 / $numero2);
    }
} else {
    echo "Operação inválida";
}

?>