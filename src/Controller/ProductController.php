<?php

// src/Controller/ProductController.php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Attribute\DeprecatedAlias;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/products')]
    public function list(LoggerInterface $logger): Response
    {
        $result = 'Look, I just used a service!';
        $logger->info($result);

        return new Response($result);
    }

    #[Route(
        '/product/{id}',
        name: 'product_details',
        alias: new DeprecatedAlias(
            aliasName: 'product_show',
            package: 'acme/package',
            version: '1.2',
        ),
    )]
    public function show(): Response
    {
        // ...
    }
}
