<?php
$prefixo = "LOTE";
$quantidade = 5;
$inicio = 100;
for ($i = 1; $i <= $quantidade; $i++) {
    echo $prefixo . "-" . ($inicio + $i) . "\n";
}
?>