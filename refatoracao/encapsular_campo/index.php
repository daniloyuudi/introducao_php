<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

require 'Empresa.php';
require 'Funcionario.php';

$alura = new Empresa();
$funcionario = new Funcionario('Giovanni', 100);

$alura->adicionarFuncionario($funcionario);

echo $funcionario->getSalario();
echo "<br>";

$alura->promoveFuncionario($funcionario, 50);

echo $funcionario->getSalario();
echo "<br>";