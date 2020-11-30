<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Helper\FlashMessageTrait;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Nyholm\Psr7\Response;

class RealizarLogin implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private $repositorioDeUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager->getRepository(Usuario::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface 
    {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        /*$email = filter_var(
            $request->getQueryParams()['email'],
            FILTER_VALIDATE_EMAIL
        );*/

        $resposta = new Response(302, ['Location' => '/login']);
        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger', 'O e-mail digitado não é um e-mail válido');
            return $resposta;
        }

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        /*$senha = filter_var(
            $request->getQueryParams()['senha'],
            FILTER_SANITIZE_STRING
        );*/

        /** @var Usuario $usuario */
        $usuario = $this->repositorioDeUsuarios->findOneBy(['email' => $email]);

        $resposta = new Response(302, ['Location' => '/login']);
        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $this->defineMensagem('danger', 'E-mail ou senha inválidos');
            return $resposta;
        }

        $_SESSION['logado'] = true;

        return new Response(302, ['Location' => '/listar-cursos']);
    }
}