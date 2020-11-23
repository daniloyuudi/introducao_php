<?php

require_once "autoload.php";
require_once "lista-funcionarios.php";

?>


<html>
    <head>
        <title>Funcionários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Controle de Funcionários</h1>
        </header>
        <main>
            <section id="section-lista">
                <?php if ($lista_funcionarios) { ?>
                    <h2>Listagem de Funcionários</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Salário</th>
                                <th>Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lista_funcionarios as $funcionario) { ?>
                                <tr>
                                    <td><?= $funcionario->recuperaNome() ?></td>
                                    <td><?= $funcionario->recuperaCpf() ?></td>
                                    <td>R$ <?= number_format($funcionario->recuperaSalario(), 2, ",", ".") ?></td>
                                    <td><?= $funcionario->recuperaCargo() ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <h3>Não existem funcionários cadastrados!</h3>
                <?php } ?>
            </section>
            <section id="section-form">
                <h2>Novo Funcionário</h2>
                <div id="div-erros"></div>
                <form>
                    <div>
                        <div class="campo">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" placeholder="Nome" />
                        </div>
                        
                        <div class="campo">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" placeholder="CPF" />
                        </div>

                        <div class="campo">
                            <label>Salário</label>
                            <input type="number" id="salario" placeholder="Salário em R$" />
                        </div>

                        <div class="campo">
                            <label>Cargo</label>
                            <select id="cargo">
                                <option value="">-- Escolha um cargo --</option>
                                <option value="1">Desenvolvedor</option>
                                <option value="2">Diretor</option>
                                <option value="3">Editor de Vídeo</option>
                                <option value="4">Gerente</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <input type="submit" id="adicionar" value="Adicionar">
                    </div>
                </form>
            </section>
        </main>
        <footer>
            <h3>WEBJUMP (c)</h3>
        </footer>

        <script src="funcionarios.js"></script>
    </body>
</html>