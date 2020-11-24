<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

class ListarCursos
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);
    }

    public function processaRequisicao(): void
    {
        $cursos = $this->repositorioDeCursos->findAll();
        $titulo = "Lista de cursos";
        require __DIR__ . '/../../view/cursos/listar-cursos.php';
    }
}