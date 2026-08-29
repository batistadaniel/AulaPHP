<?php

$usuario = "admin";
$senha = "1234";

if ($usuario == "admin" && $senha == "1234") {
    echo "Acesso total";
} elseif ($usuario == "comum") {
    echo "Acesso restrito";
} else {
    echo "Usuário inválido";
}

?>