<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class ListarCursos implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);
    }

    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('cursos/listar-cursos.php', [
            'cursos' => $this->repositorioDeCursos->findAll(),
            'titulo' => "Lista de cursos"
        ]);
    }
}