<?php

class Calculadora {

    public function somar(float $numero1, float $numero2): float {
        return $numero1 + $numero2;
    }
}

$calculadora1 = new Calculadora();

$resultado = $calculadora1->somar(5, 10);

echo "Resultado: " . $resultado;

?>
