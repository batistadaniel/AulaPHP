<?php

function mostrarTexto($texto, $qtd){
    for ($i = 0; $i < $qtd; $i++) {
        echo "$texto". "\n";
    }
}

$texto = readline("Insira o texto que deseja repetir: ");
$qtd = readline("Quantas vezes deseja repetir: ");

mostrarTexto($texto, $qtd);
?>