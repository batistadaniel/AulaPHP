<?php

$idade = 70;

if ($idade < 18) {
    echo "Não pode dirigir";
} elseif ($idade <= 65) {
    echo "Pode dirigir";
} else {
    echo "Pode dirigir com restrições de saúde";
}

?>