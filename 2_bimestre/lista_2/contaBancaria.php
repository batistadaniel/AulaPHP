<?php

class ContaBancaria {

    public float $saldo;

    public function depositar(float $valor): void {
        if ($valor <= 0) {
            echo "Insira um valor valido!";
            echo PHP_EOL;
        } else {
            $this->saldo += $valor;
        }
            
    }

    public function sacar(float $valor): void {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque realizado. Saldo: R$ " . $this->saldo;
        } else {
            echo "Saldo insuficiente";
        }
    }
    
    public function consultar() : void{
        echo "Saldo: R$ " . $this->saldo;
    }
}

$conta1 = new ContaBancaria();

$conta1->saldo = 100;

// $conta1->depositar(0);
// $conta1->sacar(130);

$conta1->consultar()



?>
