<?php

class Livro{
    public string $titulo;
    public string $autor;
    public string $ano;

    public function exibirDados () {
        echo "Livro: $this->titulo";
        echo PHP_EOL;
        echo "Autor: $this->autor";
        echo PHP_EOL;
        echo "Ano: $this->ano";
        echo PHP_EOL;
        echo PHP_EOL;
    }
}

$livro1 = new Livro();

$livro1->titulo = "nome do livro 1";
$livro1->autor = "autor do livro 1";
$livro1->ano = "ano do livro 1";

$livro1->exibirDados();

$livro2 = new Livro();

$livro2->titulo = "nome do livro 2";
$livro2->autor = "autor do livro 2";
$livro2->ano = "ano do livro 2";

$livro2->exibirDados();


?>
