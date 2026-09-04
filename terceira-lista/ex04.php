<?php

$idade = readline("Informe sua idade: ");

if ($idade < 0) {
    echo "Idade Inválida";
} elseif ($idade < 12) {
    echo "Infantil";
} elseif ($idade <= 17) {
    echo "Juvenil";
} elseif ($idade <= 59) {
    echo "Adulto";
} else {
    echo "Sênior";
}

?>