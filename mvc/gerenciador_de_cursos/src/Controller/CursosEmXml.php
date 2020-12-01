<?php

namespace Alura\Cursos\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;
use Alura\Cursos\Entity\Curso;

class CursosEmXml implements RequestHandlerInterface
{
    private $repositorioDeCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager
            ->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        /** @var Curso[] $cursos */
        $cursos = $this->repositorioDeCursos->findAll();
        $cursosEmXml = new \SimpleXMLElement();

        foreach ($cursos as $curso) {
            $cursoEmXml = $cursosEmXml->addChild('curso');
            $cursoEmXml->addChild('id', $curso->getId());
            $cursoEmXml->addChild('descricao', $curso->getDescricao());
        }

        return new Response(200,
            ['Content-Type' => 'application/xml'],
            $cursosEmXml->asXML()
        );
    }
}