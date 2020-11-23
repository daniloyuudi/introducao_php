<?php

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\LeitorFuncionarios;

$leitorFuncionarios = new LeitorFuncionarios();
$lista_funcionarios = $leitorFuncionarios->pegarTodosFuncionarios();


/*$lista_funcionarios = [
    new Desenvolvedor(
        "Osvaldo Bento Leandro Pinto",
        new CPF("598.994.685-68"),
        1000
    ),
    new Diretor(
        "Vitor Caleb Sérgio da Cruz",
        new CPF("445.859.686-10"),
        100000
    ),
    new Gerente(
        "Lucas André da Silva",
        new CPF("799.218.117-46"),
        20000
    ),
    new EditorVideo(
        "Eduarda Lorena Carolina Gomes",
        new CPF("497.845.844-76"),
        200
    ),
    new Desenvolvedor(
        "Ryan Murilo Manuel Brito",
        new CPF("314.234.460-89"),
        1000
    )
];*/

try {
    /*$lista_funcionarios[] = new EditorVideo(
        "L",
        new CPF("731.222.624-87"),
        50
    );*/
} catch (InvalidArgumentException $e) { ?>
    <h1><?= $e->getMessage() ?></h1>
    <?php die(); ?>
<?php }

?>