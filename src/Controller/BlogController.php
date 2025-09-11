<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/blog', requirements: ['_locale' => 'en|es|fr'], name: 'blog_')]
class BlogController extends AbstractController
{
    #[Route('/{_locale}', name: 'index')]
    public function index(int $page, string $title): Response
    {
        // ...
    }

    #[Route('/{_locale}/posts/{slug}', name: 'show')]
    public function show(BlogPost $post): Response
    {
        // $post это объект, чей слаг соответствует параметру маршрутизации
        // ...
    }

    #[Route('/blog', name: 'blog_list')]
    public function list(Request $request): Response
    {
        $routeName = $request->attributes->get('_route');
        $routeParameters = $request->attributes->get('_route_params');

        // используйте это, чтобы получить все доступные атрибуты (не только маршрутизации):
        $allAttributes = $request->attributes->all();

        // ...
    }
}
