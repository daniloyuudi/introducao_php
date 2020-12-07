<?php

use PHPUnit\Framework\TestCase;

class CPFTest extends TestCase
{
    /**
     * @covers CPF::__construct()
     * @covers CPF::recuperaNumero()
     */
    public function testCriaCpfValido()
    {
        $cpf = new CPF("606.678.213-23");

        static::assertEquals("606.678.213-23", $cpf->recuperaNumero());
    }

    /**
     * @covers CPF::__construct()
     */
    public function testRecusaCpfInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Cpf inválido");

        $cpf = new CPF("606.678.21-23");
    }
}