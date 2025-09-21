<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController extends AbstractController
{
    #[Route(path: '/lucky/number/{max}', name: 'app_lucky_number')]
    public function number(int $max, LoggerInterface $logger): Response
    {
        $number = random_int(0, $max);
        $url = $this->generateUrl('app_lucky_number', ['max' => $max]);
        $logger->info('We are logging: ' . $url);


        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'generated_url' => $url
        ]);

    }
}
