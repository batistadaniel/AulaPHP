<?php

$usuario_cadastrado = "admin";
$senha_cadastrada = "12345";

$usuario = readline("Informe o usuário: ");
$senha = readline("Informe a senha: ");

if ($usuario == $usuario_cadastrado && $senha == $senha_cadastrada) {
    echo "Acesso concedido";
} elseif ($usuario != $usuario_cadastrado) {
    echo "Usuário inexistente";
} else {
    echo "Senha incorreta";
}

?>