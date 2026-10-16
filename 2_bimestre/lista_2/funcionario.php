<?php

class Funcionario {

    public string $nome;
    public float $salario;

    public function exibirDados(): void {
        echo "Nome: " . $this->nome;
        echo PHP_EOL;
        echo "Salario: R$ " . $this->salario;
        echo PHP_EOL;
    }
}

class Gerente extends Funcionario {

    public string $departamento;
}

$gerente = new Gerente();

$gerente->nome = "Daniel";
$gerente->salario = 3000;
$gerente->departamento = "Financeiro";

$gerente->exibirDados();

echo "Departamento: " . $gerente->departamento;

?>
