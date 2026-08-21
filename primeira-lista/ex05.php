<?php

$salarioBase = 2000;

$novoSalario = number_format($salarioBase * 1.055, 2,",",".");

echo "O novo salario é de $novoSalario.";
?>