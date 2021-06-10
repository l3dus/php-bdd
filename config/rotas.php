<?php

return [
    '/login' => \Ledus\Armazenamento\Controller\FormularioLogin::class,
    '/fazer-login' => \Ledus\Armazenamento\Controller\Login::class,
    '/logout' => \Ledus\Armazenamento\Controller\Logout::class,
    '/novo-curso' => \Ledus\Armazenamento\Controller\FormularioInsercaoCurso::class,
    '/salvar-curso' => \Ledus\Armazenamento\Controller\PersistenciaCurso::class,
    '/listar-cursos' => \Ledus\Armazenamento\Controller\ListaDeCursos::class,
    '/editar-curso' => \Ledus\Armazenamento\Controller\FormularioEdicaoCurso::class,
    '/excluir-curso' => \Ledus\Armazenamento\Controller\ExclusaoDeCurso::class,
    '/nova-formacao' => \Ledus\Armazenamento\Controller\FormularioInsercaoFormacao::class,
    '/salvar-formacao' => \Ledus\Armazenamento\Controller\PersistenciaFormacao::class,
    '/listar-formacoes' => \Ledus\Armazenamento\Controller\ListaDeFormacoes::class,
    '/excluir-formacao' => \Ledus\Armazenamento\Controller\ExclusaoDeFormacao::class,
];