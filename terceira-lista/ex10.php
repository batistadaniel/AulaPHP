<?php

$num = readline("Digite: ");

if ($num > 0) {
    if ($num % 2 == 0) {
        echo "Positivo Par";
    } else {
        echo "Positivo Impar";
    }
} else {
    echo "Negativo";
}

?>