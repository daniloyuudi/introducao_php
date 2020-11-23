<?php

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;

$lista_contas = [
    new ContaCorrente(
        new Titular(
        new CPF("959.429.984-34"),
        "Vicente Pedro Ramos",
        new Endereco("Rio Branco", "Portal da Amazônia", "Rua Antimari", "653")
        )
    ),
    new ContaCorrente(
        new Titular(
            new CPF("696.062.512-25"),
            "Erick Lucca Fernandes",
            new Endereco("Macapá", "Congós", "Rua Manoel Ferreira da Silva", "135")
        )
    ),
    new ContaPoupanca(
        new Titular(
            new CPF("467.501.434-82"),
            "Erick Samuel Davi Nogueira",
            new Endereco("Boa Vista", "Distrito Industrial Governador Aquilino Mota Duarte", "Rua Ricardo Madruga Saraiva", "997")
        )
    )
];

?>