<?php

class ContaBancaria {

    public float $saldo;

    public function depositar(float $valor): void {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque realizado. Saldo: R$ " . $this->saldo;
        } else {
            echo "Saldo insuficiente";
        }
    }
}

$conta1 = new ContaBancaria();

$conta1->saldo = 100;

$conta1->depositar(50);
$conta1->sacar(30);

?>
