<?php

class ContaBancaria {   

    public string $titular;
    public float $saldo;

    public function __construct(
        string $titular,
        float $saldo
    ) { 
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor) :void{
        $this->saldo += $valor;
    }

    public function consultarSaldo() :void{ 
        echo "Ola, $this->titular. ";
        echo PHP_EOL;
        echo "Saldo R$ " . number_format($this->saldo, 2, ",", ".");

    }
}

$conta1 = new ContaBancaria("Daniel", 0);

$conta1->depositar(100);
$conta1->consultarSaldo();
?>