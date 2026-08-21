<?php

$cotacaoDia = 5.5;
$quantidadeDolares = 1000;
$valorConvertido = ($cotacaoDia * $quantidadeDolares);
$valorFinalComTaxa = number_format(($valorConvertido + 10), 2,",",".");;
echo "O valor de US$ $quantidadeDolares foi convertido para R$ $valorFinalComTaxa.";
?>