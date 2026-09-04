<?php

$valorConta = readline("Informe o valor da conta: R$ ");
$aluno = readline("É aluno/colaborador? (sim/nao): ");
$taxa = readline("Deseja pagar a taxa de serviço? (sim/nao): ");

if ($aluno == "sim") {
    $desconto = $valorConta * 0.10;
} else {
    $desconto = 0;
}

$valorFinal = $valorConta - $desconto;

if ($taxa == "sim") {
    $valorFinal = $valorFinal + ($valorFinal * 0.10);
}

echo "Valor final: R$ " . $valorFinal;

?>