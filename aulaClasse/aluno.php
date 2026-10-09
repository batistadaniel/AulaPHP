<?php

class Aluno{
    public int $idade;
    public string $nome;

    public function apresentar () {
        echo "Ola, meu nome e $this->nome e tenho $this->idade anos.";
    }
}

$aluno1 = new Aluno();

$aluno1->nome = "Daniel";
$aluno1->idade = 23;

$aluno1->apresentar();

// echo $aluno1->nome;
// echo "<br>";
// echo $aluno1->idade;

?>