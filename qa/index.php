<?php

require "vendor/autoload.php";


$cpf = new CPF("123.456.789-10");
$titular = new Titular($cpf, "João da Silva Sauro");
$conta1 = new Conta($titular);

echo Conta::recuperaNumeroDeContas();