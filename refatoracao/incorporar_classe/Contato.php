<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Contato
{
    private $cep;
    private $endereco;

    public function __construct(string $endereco, string $cep) {
        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getCep(): string
    {
        return $this->cep;
    }
}
