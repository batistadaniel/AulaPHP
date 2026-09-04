<?php

$valorCompra = readline("Informe o valor da compra: R$ ");

if ($valorCompra <= 100) {
    $desconto = 0;
} elseif ($valorCompra <= 200) {
    $desconto = $valorCompra * 0.05;
} else {
    $desconto = $valorCompra * 0.10;
}

$valorFinal = $valorCompra - $desconto;

echo "Valor original: R$ " . $valorCompra . "\n";
echo "Valor do desconto: R$ " . $desconto . "\n";
echo "Valor final: R$ " . $valorFinal;

?>