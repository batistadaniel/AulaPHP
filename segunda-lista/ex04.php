<?php

$hora = 14;

if ($hora >= 6 && $hora <= 12) {
    echo "Turno da Manhã";
} elseif ($hora >= 13 && $hora <= 18) {
    echo "Turno da Tarde";
} else {
    echo "Turno da Noite";
}

?>