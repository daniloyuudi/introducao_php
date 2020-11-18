<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;

require_once "autoload.php";

$autenticador = new Autenticador();
$umDiretor = new Titular(
    new CPF('123.456.789-10'),
    'João da Silva',
    new \Alura\Banco\Modelo\Endereco('', '', '', '')
);

$autenticador->tentaLogin($umDiretor, 'abcd');