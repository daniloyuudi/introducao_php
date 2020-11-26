<?php

use Alura\Cursos\Controller\{
    FormularioInsercao,
    Exclusao
};

return [
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso' => Exclusao::class
];