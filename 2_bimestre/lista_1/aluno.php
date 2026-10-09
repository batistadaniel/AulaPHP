<?php

class Aluno{
    public int $matricula;
    public string $nome;

    public function exibirDados () {
        echo "Aluno: $this->nome \nMatricula: $this->matricula.";
    }
}

$aluno1 = new Aluno();

$aluno1->nome = "Daniel";
$aluno1->matricula = 123456;

$aluno1->exibirDados();

// echo $aluno1->nome;
// echo "<br>";
// echo $aluno1->idade;

?>