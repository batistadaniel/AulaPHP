<?php

class Produto{
    public string $nome;
    public float $preco;

    public function __construct(
        string $nome, 
        float $preco
    ) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    
    public function exibir () {
        echo "Nome: $this->nome";
        echo PHP_EOL;
        echo "Preco: $this->preco";
        echo PHP_EOL;
    }
}

$produto = new Produto("nome do produto 1", 26.7);

$produto->exibir();
