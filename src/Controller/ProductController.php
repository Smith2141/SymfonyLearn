<?php

// src/Controller/ProductController.php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products')]
    public function list(LoggerInterface $logger): Response
    {
        $result = 'Look, I just used a service!';
        $logger->info($result);

        return new Response($result);
    }
}
