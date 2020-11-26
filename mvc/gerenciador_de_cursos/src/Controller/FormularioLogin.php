<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\ControllerComHtml;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioLogin implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->renderizaHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}