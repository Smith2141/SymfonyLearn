<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route('/hello/{name}', name: 'index')]
    public function index(string $name, LoggerInterface $logger): Response
    {
        $logger->info("Saying hello to $name");

        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/simplicity', methods: ['GET'])]
    public function simple(): Response
    {
        return new Response('Simple! Easy! Great!');
    }

    #[Route('/api/hello/{name}', methods: ['GET'])]
    public function apiHello(string $name): JsonResponse
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }
}
