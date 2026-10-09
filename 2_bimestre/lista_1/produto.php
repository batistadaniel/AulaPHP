<?php

class Produto {

    public float $valor;
    public float $desconto;

    public function aplicarDesconto(float $valor, float $desconto): void {
        $this->valor = $valor * (1 - ($desconto / 100));

        echo "A compra de R$ $valor com $desconto% de desconto vai ficar em R$ $this->valor";
    }
}

$compra1 = new Produto();

$compra1->aplicarDesconto(100, 10);

?>