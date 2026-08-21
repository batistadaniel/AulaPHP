<?php

$valorProduto = number_format(100, 2,",",".");;
$valorComDesconto = number_format($valorProduto - ($valorProduto * 0.1), 2,",",".");;  

echo "O valor final do produto de R$ $valorProduto com desconto foi para R$ $valorComDesconto.";
?>