<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Server\RequestHandlerInterface;

class Persistencia implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING
        );

        $curso = new Curso();
        $curso->setDescricao($descricao);

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $this->defineMensagem("success", "Curso atualizado com sucesso");
        } else {
            $this->entityManager->persist($curso);
            $_SESSION["mensagem"] = "Curso inserido com sucesso";
            $this->defineMensagem("success", "Curso inserido com sucesso");
        }

        $this->entityManager->flush();

        return new Response(302, ['Location' => '/listar-cursos']);
    }
}