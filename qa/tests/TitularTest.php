<?php

use PHPUNIT\Framework\TestCase;

class TitularTest extends TestCase
{
    /**
     * @dataProvider geraCpf
     * @covers Titular::__construct()
     * @covers Titular::validaNomeTitular
     * @uses CPF::__construct()
     * @uses Titular::validaNomeTitular()
     */
    public function testNaoDeveAceitarNomeDeTitularComMenosDe6Caracteres($cpf)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Nome precisa ter pelo menos 5 caracteres");

        $titular = new Titular($cpf, "J");
    }

    /**
     * @dataProvider geraCpf
     * @covers Titular::__construct()
     * @covers Titular::recuperaNome()
     * @covers Titular::recuperaCpf()
     * @covers CPF::recuperaNumero()
     * @covers Titular::validaNomeTitular()
     */
    public function testDeveInicializarTitularERetornarCamposCorretamente($cpf)
    {
        $titular = new Titular($cpf, "João da Silva Sauro");

        static::assertEquals("João da Silva Sauro", $titular->recuperaNome());
        static::assertEquals("123.456.789-10", $titular->recuperaCpf());
    }

    /**
     * @codeCoverageIgnore
     */
    public function geraCpf()
    {
        $cpf = new CPF("123.456.789-10");

        return [
            [$cpf]
        ];
    }
}