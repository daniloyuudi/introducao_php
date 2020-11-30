<?php include __DIR__ . '/../inicio-html.php'; ?>

    <a href="/novo-curso" class="btn btn-primary mb-2">
        Novo curso
    </a> <br>

    <div class="form-group">
        <label for="filtrar-lista">Filtre:</label>
        <input type="text" name="filtro" id="filtrar-lista" class="form-control" placeholder="Digite o nome do curso">
    </div>
    <br>

    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="curso list-group-item d-flex justify-content-between">
                <span class="info-nome"><?= $curso->getDescricao(); ?></span>

                <span>
                    <a href="/alterar-curso?id=<?= $curso->getId(); ?>" class="btn btn-info btn-sm">
                        Alterar
                    </a>
                    <button href="#" url="/excluir-curso?id=<?= $curso->getId(); ?>" class="excluir btn btn-danger btn-sm">
                        Excluir
                    </button>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>

    <script src="filtrar.js"></script>
    <script src="excluir.js"></script>
    <script src="deslogar.js"></script>

<?php include __DIR__ . '/../fim-html.php'; ?>