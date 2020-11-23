<?php

require_once "autoload.php";
require_once "lista-contas.php";

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;

?>

<html>
    <head>
        <title>Banco Pandemonio</title>
    </head>
    <body>
        <header>
            <h1>Banco Pandemonio</h1>
        </header>
        <main>
            <h2>Lista Contas</h2>

            <?php if ($lista_contas) { ?>
                <table>
                    <tr>
                        <th>Titular</th>
                        <th>CPF</th>
                        <th>Saldo</th>
                        <th>Tipo</th>
                    </tr>
                <?php foreach ($lista_contas as $conta) { ?>
                    <tr>
                        <td><?= $conta->recuperaNomeTitular() ?></td>
                        <td><?= $conta->recuperaCpfTitular() ?></td>
                        <td>R$ <?= $conta->recuperaSaldo() ?></td>
                        <td><?= $conta->recuperaTipoConta() ?></td>
                    </tr>
                <?php } ?>
                </table>
            <?php } ?>
        </main>
        <footer></footer>
    </body>
</html>