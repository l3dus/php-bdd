<?php

namespace Ledus\Armazenamento\Controller;

use Ledus\Armazenamento\Helper\HtmlViewTrait;
use Ledus\Armazenamento\Entity\Curso;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioEdicaoCurso implements RequestHandlerInterface
{
    use HtmlViewTrait;


    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $curso = $this->entityManager->find(Curso::class, $request->getQueryParams()['id']);

        $titulo = 'Editar Curso';
        $html = $this->getHtmlFromTemplate('cursos/formulario.php', compact('curso', 'titulo'));

        return new Response(200, [], $html);
    }
}
