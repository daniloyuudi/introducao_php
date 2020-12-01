<?php declare(strict_types=1);

namespace Alura\SubstituirNumeroMagico;

require 'CalculadoraDeSalario.php';

$calculadoraDeSalario = new CalculadoraDeSalario('1000');

$salarioComDescontos = $calculadoraDeSalario->aplicaDescontos();

echo "O salário com desconto é: R$ " . number_format($salarioComDescontos, 2, ",", ".") . PHP_EOL;
