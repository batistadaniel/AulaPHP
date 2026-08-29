<?php

$hora = date("H");

if ($hora < 12) {
    echo "Bom dia";
} elseif ($hora < 18) {
    echo "Boa tarde";
} else {
    echo "Boa noite";
}

?>