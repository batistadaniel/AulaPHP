<?php

class Carro {

    public string $modelo;
    public bool $ligado;

    public function ligar(): void {
        $this->ligado = true;
    }

    public function desligar(): void {
        $this->ligado = false;
    }
}

$carro1 = new Carro();

$carro1->modelo = "Honda Civic";
$carro1->ligado = false;

$carro1->ligar();

echo "Modelo: " . $carro1->modelo . PHP_EOL;
echo "Carro ligado: " . ($carro1->ligado ? "Sim" : "Não") . PHP_EOL;

$carro1->desligar();

echo "Carro ligado: " . ($carro1->ligado ? "Sim" : "Não");

?>
