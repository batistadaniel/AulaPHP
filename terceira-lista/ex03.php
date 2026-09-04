<?php

$a = readline("Informe o lado A: ");
$b = readline("Informe o lado B: ");
$c = readline("Informe o lado C: ");

if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
    if ($a == $b && $b == $c) {
        echo "Equilátero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "Isósceles";
    } else {
        echo "Escaleno";
    }
} else {
    echo "Medidas inválidas";
}

?>