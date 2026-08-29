<?php

$valorCompra = 300;

if ($valorCompra > 500) {
    $desconto = $valorCompra * 0.15;
} elseif ($valorCompra >= 200) {
    $desconto = $valorCompra * 0.10;
} else {
    $desconto = 0;
}

$valorFinal = $valorCompra - $desconto;

echo "Valor final: R$ " . $valorFinal;

?>