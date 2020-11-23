<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }

    public function recuperaTipoConta(): string
    {
        return "Conta Poupança";
    }
}
